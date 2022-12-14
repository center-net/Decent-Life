<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth' ],
        'prefix' => 'admin'
    ], function(){

            Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
