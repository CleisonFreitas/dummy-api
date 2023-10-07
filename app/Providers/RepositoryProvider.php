<?php

namespace App\Providers;

use App\Shared\Interfaces\ListProductContract;
use App\Shared\Repositories\ListProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ListProductContract::class, ListProductRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
