<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Backend\SettingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::controller(SiteController::class)->group(function () {
            Route::get('/','home')->name('index');
            Route::get('donte','donte')->name('donte');
            Route::post('dontemessage','dontemessage')->name('dontemessage');
            Route::get('blog','blog')->name('blog');
            Route::post('order','order')->name('order');
        });
        Route::group(
            [
                'prefix' => 'admin',
                'middleware' => [ 'auth' ],
            ], function(){
                Route::controller(SettingController::class)->group(function () {
                    Route::get('setting','show')->name('admin.setting.show');
                    Route::PUT('setting/{id}','update')->name('admin.setting.update');
                });
            });

        require __DIR__.'/dashboard.php';
        require __DIR__.'/users.php';
        require __DIR__.'/initiatives.php';
        require __DIR__.'/serves.php';
        require __DIR__.'/targets.php';

    });
    require __DIR__.'/auth.php';
