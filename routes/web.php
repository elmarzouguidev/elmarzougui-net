<?php

use App\Http\Controllers\Elmarzougui\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/about', [WebController::class, 'about'])->name('about');

Route::get('/services', [WebController::class, 'service'])->name('service');

Route::get('/prices', [WebController::class, 'price'])->name('price');

Route::get('/blog', [WebController::class, 'blog'])->name('blog');

Route::get('/blog/{post}', [WebController::class, 'singleBlog'])->name('blog.single');

Route::get('/categories',[WebController::class,'categories'])->name('categories');
Route::get('/categories/{category}',[WebController::class,'singleCategory'])->name('categories.single');

Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::post('/contact', [WebController::class, 'contactMail'])->name('contact.send');

Route::group(['prefix' => 'theadmin'], function () {

    Voyager::routes();

});
