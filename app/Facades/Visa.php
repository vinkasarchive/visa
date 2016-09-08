<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Visa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'visa';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function routes()
    {
        $router = static::$app->make('router');
    }
}
