<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositorySericeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'App\Repositories\CategoryRepository\CategoryRepositoryInterface',
            'App\Repositories\CategoryRepository\CategoryRepository'
        );
    }
}
