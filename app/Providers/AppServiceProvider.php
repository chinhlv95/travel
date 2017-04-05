<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Category\CategoryEloquentRepository;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $CategoryRepository=new CategoryEloquentRepository();
      $dataCategories=$CategoryRepository->getAll()->toArray();
      view()->share('dataCategories', $dataCategories);
       view()->share('CategoryRepository', $CategoryRepository);
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
            \App\Repositories\Destination\DestinationRepositoryInterface::class,
            \App\Repositories\Destination\DestinationEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Province\ProvinceRepositoryInterface::class,
            \App\Repositories\Province\ProvinceEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Sale\SaleRepositoryInterface::class,
            \App\Repositories\Sale\SaleEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Tour\TourRepositoryInterface::class,
            \App\Repositories\Tour\TourEloquentRepository::class
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
        //traffic
         $this->app->singleton(
            \App\Repositories\Traffic\TrafficRepositoryInterface::class,
            \App\Repositories\Traffic\TrafficEloquentRepository::class
        ); 
         //order
         $this->app->singleton(
            \App\Repositories\Order\OrderRepositoryInterface::class,
            \App\Repositories\Order\OrderEloquentRepository::class
        ); 
    }
}
