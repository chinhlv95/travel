<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserEloquentRepository::class
        );
        // contact
       $this->app->singleton(
            \App\Repositories\Contact\ContactRepositoryInterface::class,
            \App\Repositories\Contact\ContactEloquentRepository::class
        );
       //price-range
        $this->app->singleton(
            \App\Repositories\PriceRange\PriceRangeRepositoryInterface::class,
            \App\Repositories\PriceRange\PriceRangeEloquentRepository::class
        );
        //pay
          $this->app->singleton(
            \App\Repositories\Pay\PayRepositoryInterface::class,
            \App\Repositories\Pay\PayEloquentRepository::class
        );
        //
         $this->app->singleton(
            \App\Repositories\Traffic\TrafficRepositoryInterface::class,
            \App\Repositories\Traffic\TrafficEloquentRepository::class
        ); 
    }
}
