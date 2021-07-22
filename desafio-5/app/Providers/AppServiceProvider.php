<?php

namespace App\Providers;

use App\View\Components\BlogItem;
use App\View\Components\DescontoItem;
use Illuminate\Support\Facades\Blade;
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
     * @return void
     */
    public function boot()
    {
        Blade::component('blogitem', BlogItem::class);
        Blade::component('descontoitem', DescontoItem::class);
    }
}
