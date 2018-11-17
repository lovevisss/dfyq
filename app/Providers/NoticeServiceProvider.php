<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NoticeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('blocks._notice', 'App\Http\Composer\NoticeComposer');
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
