<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/11/28
 * Time: 14:07
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CampusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('blocks._campus', 'App\Http\Composer\CampusComposer');
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
