<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        DB::listen(function($sql, $bindings, $time){
            echo 'sql----->: '.$sql.PHP_EOL;
            echo 'values-->: '.json_encode($bindings).PHP_EOL;
            echo 'time---->: '.$time.' ms'.PHP_EOL;
        });
        */
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
