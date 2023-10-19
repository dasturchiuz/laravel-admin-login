<?php
/*
 * Copyright (c) 2023. Dilshod Tursimatov
 * Github: @dasturchiuz
 * Twitter: @dasturchiuz
 *
 */

namespace Dasturchiuz\LaravelAdminLogin;

use Illuminate\Support\ServiceProvider;

class LaravelAdminLoginServiceProvider  extends ServiceProvider
{

    public function boot(LaravelAdminLogin $extension){
        if (! LaravelAdminLogin::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-login');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/dasturchiuz/laravel-admin-login')],
                'laravel-admin-login'
            );
        }

        $this->app->booted(function () {
            LaravelAdminLogin::routes(__DIR__.'/../routes/web.php');
        });

        # $this->app->make('Illuminate\Contracts\Http\Kernel')->prependMiddleware(Middlewares\MultiLanguageMiddleware::class);

    }
}
