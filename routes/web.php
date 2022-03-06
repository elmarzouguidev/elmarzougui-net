<?php

use App\Http\Controllers\Elmarzougui\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WebController::class,'index'])->name('home');


Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
