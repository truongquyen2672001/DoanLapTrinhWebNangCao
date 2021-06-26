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
        $this->app->singleton(
            \App\Repositories\interfaces\CategoryRepositoryInterface::class,
            \App\Repositories\CategoryEloquentRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\interfaces\TypeRepositoryInterface::class,
            \App\Repositories\TypeEloquentRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\interfaces\ObjectRepositoryInterface::class,
            \App\Repositories\ObjectEloquentRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\interfaces\DetailRepositoryInterface::class,
            \App\Repositories\DetailEloquentRepository::class,
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
