<?php

namespace AndreFelipe\FilamentPartials\Commands;

use Illuminate\Console\Command;

class FilamentPartialsCommand extends Command
{
    public $signature = 'make:filament-partials';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
