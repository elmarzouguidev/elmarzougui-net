<?php

use App\Http\Controllers\Elmarzougui\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WebController::class,'index'])->name('home');

Route::get('/about',[WebController::class,'about'])->name('about');

Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
