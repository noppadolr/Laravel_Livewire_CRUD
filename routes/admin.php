<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')
    ->controller(AdminController::class)
    ->prefix('admin')
    ->as('admin.')
    ->group(function(){

        Route::get('dashboard','dashboard')->name('dashboard');

    });


require __DIR__.'/auth.php';
