<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

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
        self::laravelRoutes();
    }

    protected static function laravelRoutes() {
      Route::get('users/activate-account/{token}', 'Auth\EmailConfirmationController@showConfirmationWindow')->name('confirm-email');
      Route::post('users/activate-account', 'Auth\EmailConfirmationController@confirm');
    }
}
