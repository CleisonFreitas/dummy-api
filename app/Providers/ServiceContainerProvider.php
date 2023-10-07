<?php

namespace App\Providers;

use App\Shared\Interfaces\ListProductContract;
use App\Shared\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ServiceContainerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductService::class, function($app) {
            return new ProductService($app->make(ListProductContract::class));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
