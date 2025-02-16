<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Policies\AdminPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    protected $namespace='App\\Http\\Controllers';
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('view', [AdminPolicy::class, 'view']);
        Paginator::defaultView("vendor.pagination.bootstrap-4");
    }
}
