<?php

namespace App\Providers;

use App\Services\AdminService;
use App\Services\AdminServiceInterface;
use App\Services\BookService;
use App\Services\BookServiceInterface;
use App\Services\CategoryService;
use App\Services\CategoryServiceInterface;
use App\Services\CommentService;
use App\Services\CommentServiceInterface;
use App\Services\EmployeeService;
use App\Services\EmployeeServiceInterface;
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
        $this->app->bind(
            AdminServiceInterface::class,
            AdminService::class,
        );
        $this->app->bind(
            EmployeeServiceInterface::class,
            EmployeeService::class,
        );
        $this->app->bind(
            CommentServiceInterface::class,
            CommentService::class,
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
