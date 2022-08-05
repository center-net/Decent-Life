<?php

use App\Http\Controllers\Backend\ServesController;
use Illuminate\Support\Facades\Route;
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ 'auth' ]
    ], function(){

            Route::get('/serves', [ServesController::class, 'index'])->name('admin.serves');
            Route::post('/serves', [ServesController::class, 'store'])->name('admin.serves.store');
            Route::PUT('/serves/edit/{id}', [ServesController::class, 'update'])->name('admin.serves.update');
            Route::Delete('/serves/destroy/{id}', [ServesController::class, 'destroy'])->name('admin.serves.destroy');
});
