<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items/create', [ItemController::class, 'create']);

Route::post('/items',[ItemController::class,'store'])
    ->name('item.store');

