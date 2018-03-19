<?php

namespace ado2018\Providers;

use Illuminate\Support\ServiceProvider;
//añadido para funcionamiendo del migrate user 15-03-2018
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //añadido para funcionamiendo del migrate user 15-03-2018
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
