<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


use App\Models\Avatar;
use App\Models\Personal_avatar;

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
        Schema::defaultStringLength(191);
        \View::composer('*', function($view){
            if (auth()->user()) {
                $view->with(['uuid' => auth()->user()->external_id]);
            }
        });
    }
}
