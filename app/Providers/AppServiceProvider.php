<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\helper\apiClass;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(apiClass::class,function($app){
            return new apiClass();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
