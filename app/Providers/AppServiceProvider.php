<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\mensajes;
use App\observes\MensajeObservable; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        mensajes::observe(MensajeObservable::class);
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
