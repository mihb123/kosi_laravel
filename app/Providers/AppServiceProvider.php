<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Product\ProductRepositoryInterface',
            'App\Repositories\Product\ProductRepository'
        );
        $this->app->bind(
            'App\Repositories\Blog\BlogRepositoryInterface',
            'App\Repositories\Blog\BlogRepository'
        );
        // base repository
        $this->app->bind(
            'App\Repositories\BaseRepositoryInterface',
            'App\Repositories\BaseRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
