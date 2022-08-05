<?php

use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ 'auth' ]
    ], function(){

            Route::get('/users', [UserController::class, 'index'])->name('admin.users');
            Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
            Route::PUT('/users/edit/{id}', [UserController::class, 'update'])->name('admin.users.update');
            Route::Delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});
