<?php

use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;


Route::namespace('Main')->as('main::')->group(function () {
   Route::get('/', [MainController::class, 'index'])->name('index');
});
