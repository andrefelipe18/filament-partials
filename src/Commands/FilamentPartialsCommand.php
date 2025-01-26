<?php

namespace AndreFelipe\FilamentPartials\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class FilamentPartialsCommand extends Command
{
    public $signature = 'make:filament-partials {resource?}';

    public $description = 'Create partials of a resource';

    public function handle(): int
    {
        $resource = $this->getResourcePath();

        $this->createPartial('form', $resource);
        $this->createPartial('table', $resource);

        $this->info('Partials created successfully.');

        return 0;
    }

    protected function getResourcePath(): string
    {
        $resource = $this->argument('resource');

        if (! $resource) {
            $resource = $this->ask('What is the resource name?');
        }

        if (! $this->isValidResourcePath($resource)) {
            $this->error('Invalid resource path');
            return $this->getResourcePath();
        }

        return $resource;
    }

    protected function isValidResourcePath(string $resource): bool
    {
        $baseResourcesPath = config('filament-partials.base_resources_path');
        $baseClustersPath = config('filament-partials.base_clusters_path');

        $resourcePath = base_path($baseResourcesPath . '/' . $resource);
        $clusterResourcePath = base_path($baseClustersPath . '/*/Resources/' . $resource);

        if (is_dir($resourcePath)) {
            return true;
        }

        $clusters = glob(base_path($baseClustersPath . '/*'), GLOB_ONLYDIR);

        foreach ($clusters as $cluster) {
            if (is_dir($cluster . '/Resources/' . $resource)) {
                return true;
            }
        }

        return false;
    }

    protected function createPartial(string $type, string $resource): void
    {
        $stubPath = __DIR__ . '/../stubs/' . $type . '.stub';
        $partialPath = base_path(config('filament-partials.base_resources_path') . '/' . $resource . '/' . ucfirst($type) . '.php');

        $stub = File::get($stubPath);
        $content = str_replace('{{ resource }}', $resource, $stub);

        File::ensureDirectoryExists(dirname($partialPath));
        File::put($partialPath, $content);
    }
}