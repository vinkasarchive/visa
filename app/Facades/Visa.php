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
        self::socialiteRoutes();
        self::laravelRoutes();
    }

    protected static function socialiteRoutes() {
      Route::get('/join', 'Auth\RegisterController@showJoinForm')->name('join');
      Route::post('/join', 'Auth\RegisterController@join');

      Route::get('/oauth2/google', 'Auth\SocialiteController@redirectToGoogle');
      Route::get('/oauth2/google/callback', 'Auth\SocialiteController@handleGoogleCallback');
    }

    protected static function laravelRoutes() {
      Route::get('/users/activate-account/{token}', 'Auth\EmailConfirmationController@showConfirmationWindow');
      Route::post('/users/activate-account/{token}', 'Auth\EmailConfirmationController@confirm');
    }
}
