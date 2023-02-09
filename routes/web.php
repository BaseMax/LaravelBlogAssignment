<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "App\Http\Controllers\BlogController@index")->name("main");

Route::get("/about", "App\Http\Controllers\AboutController@index")->name("about");

Route::get("/login", "App\Http\Controllers\LoginController@index")->name("login");

Route::get("/signup", "App\Http\Controllers\SignupController@index")->name("signup");

Route::get("/blog/{article_title}", "App\Http\Controllers\BlogController@show")->where("article_title", "[a-zA-Z0-9-]+")->name("showArticle");

Route::get("/page={page_index}", "App\Http\Controllers\PageController@index")->where("page_index", "[0-9]+");
