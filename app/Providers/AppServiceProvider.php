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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @see : https://laravel-news.com/laravel-5-4-key-too-long-error
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
