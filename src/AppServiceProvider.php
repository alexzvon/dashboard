<?php

namespace AlexZvon\DashBoard;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }
    public function boot()
    {
        $this->loadDependencies();
    }

    private function loadDependencies(): void
    {
//        $this->mergeConfigFrom(__DIR__.'/../config/inspiring.php', 'enso.inspiring');
//
//        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'enso.config');
//
//        $this->mergeConfigFrom(__DIR__.'/../config/auth.php', 'enso.auth');
//
//        $this->mergeConfigFrom(__DIR__.'/../config/state.php', 'enso.state');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

//        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-enso/core');

    }
}
