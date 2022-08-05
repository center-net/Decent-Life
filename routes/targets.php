<?php

use App\Http\Controllers\Backend\TargetsController;
use Illuminate\Support\Facades\Route;
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ 'auth' ]
    ], function(){

            Route::get('/targets', [TargetsController::class, 'index'])->name('admin.targets');
            Route::post('/targets', [TargetsController::class, 'store'])->name('admin.targets.store');
            Route::PUT('/targets/edit/{id}', [TargetsController::class, 'update'])->name('admin.targets.update');
            Route::Delete('/targets/destroy/{id}', [TargetsController::class, 'destroy'])->name('admin.targets.destroy');
});
