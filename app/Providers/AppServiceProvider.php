<?php

namespace App\Providers;

use App\Services\BookService;
use App\Services\BookServiceInterface;
use App\Services\CategoryService;
use App\Services\CategoryServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            CategoryServiceInterface::class,
            CategoryService::class,
        );

        $this->app->bind(
            BookServiceInterface::class,
            BookService::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
