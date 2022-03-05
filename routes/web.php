<?php

use Illuminate\Support\Facades\Route;

//importing controllers
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

| CREATED BY ROSHAN PANTA
*/
Route::get('/', [HomePageController::class, "index"]);

Route::get('/blog', function () {
    return view('web.blog');
});




/*
CREATED BY ROSHAN PANTA
GROUP ROUTES FOR ADMIN
*/
Route::group(
    ['prefix'=>'dashboard',],
    function(){
        // intro.index,store,create,show,update
        Route::resource('/intro', IntroductionController::class);
        Route::resource('/blogs', BlogController:: class);
        // Route::post('/updateProfile', [IntroductionController:: class,"update"]);
        Route::post('/storeBlog', [BlogController:: class, "store"]);
        Route::get('/showBlog/{id}', [BlogController:: class, "show"]);
        Route::get('/editBlog/{id}', [BlogController:: class, "edit"]);
        Route::post('/updateBlog/{id}', [BlogController:: class, "update"]);
    }

);