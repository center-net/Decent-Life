<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Backend\Setting;

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
        $setting = Setting::checkSettings();
        View()->share([
            'setting'=>$setting,
        ]);
    }
}
