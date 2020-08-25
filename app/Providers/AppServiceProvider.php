<?php

namespace App\Providers;

use App\Logic\SysVar\SysVarLogic;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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

        // Or you can use below callback function
         View::composer('admin.partials.apperanceMenuItem', function ($view) {
            $sysVarLogic = new SysVarLogic();
            $types = $sysVarLogic->GetTypes();
            $view->with('apperanceMenuItems', $types);
        });
    }
}
