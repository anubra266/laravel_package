<?php

namespace Anubra266\LaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Anubra266\LaravelPackage\LaravelPackage
 */
class LaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel_package';
    }
}
