<?php

use App\Http\Controllers\Elmarzougui\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/about', [WebController::class, 'about'])->name('about');

Route::get('/services', [WebController::class, 'service'])->name('service');

Route::get('/prices', [WebController::class, 'price'])->name('price');


Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
