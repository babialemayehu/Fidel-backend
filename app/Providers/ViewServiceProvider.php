<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.navbar','App\Http\ViewComposers\NavbarComposer');
        View::composer('pages.*','App\Http\ViewComposers\NavbarComposer');
       // View::composer('pages.courses','App\Http\ViewComposers\NavbarComposer');
       // View::composer('pages.c', 'App\Http\ViewComposers\NavbarComposer');
       // View::composer('*', 'App\Http\ViewComposers\NavbarComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
