<?php

namespace AndreFelipe\FilamentPartials\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AndreFelipe\FilamentPartials\FilamentPartials
 */
class FilamentPartials extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AndreFelipe\FilamentPartials\FilamentPartials::class;
    }
}
