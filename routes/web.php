<?php

use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', "App\Http\Controllers\BlogController@index")->name("main");

Route::get("/about", "App\Http\Controllers\AboutController@index")->name("about");

// Route::get("/login", "App\Http\Controllers\LoginController@index")->name("login");

// Route::get("/signup", "App\Http\Controllers\SignupController@index")->name("signup");

Route::get("/blog/{article_title}", "App\Http\Controllers\BlogController@show")->where("article_title", "[a-zA-Z0-9-]+")->name("showArticle");

Route::get("/page={page_index}", "App\Http\Controllers\PageController@index")->where("page_index", "[0-9]+");

Route::get("/articles/{id}", "App\Http\Controllers\ArticleController@show")->where("id", "[0-9]+")->name("article.show");
