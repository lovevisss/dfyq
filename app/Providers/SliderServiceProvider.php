<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials._slider', 'App\Http\Composer\SliderComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
