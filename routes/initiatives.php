<?php

use App\Http\Controllers\Backend\InitiativeController;
use Illuminate\Support\Facades\Route;
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => [ 'auth' ]
    ], function(){

            Route::get('/initiatives', [InitiativeController::class, 'index'])->name('admin.initiatives');
            Route::post('/initiatives', [InitiativeController::class, 'store'])->name('admin.initiatives.store');
            Route::PUT('/initiatives/edit/{id}', [InitiativeController::class, 'update'])->name('admin.initiatives.update');
            Route::Delete('/initiatives/destroy/{id}', [InitiativeController::class, 'destroy'])->name('admin.initiatives.destroy');
});
