<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use App\Category;
use App\Page;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('secteurs', Category::all());
        View::share('pages', Page::all());
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
