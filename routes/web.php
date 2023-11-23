<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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

// Route Get Home
Route::get('/', function () {

    return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

// Route Get About
// Route::get('/about', function () {

//     return view('about', [
//         "title" => "About",
//         "active" => "About"
//     ]);
// });

// Route Get Blog
Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

// Route Get Categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category',
        'active' => 'Categories',
        'categories' => Category::all()
    ]);
});


// Route Get Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// Route Post Login
Route::post('/login', [LoginController::class, 'authenticate']);

// Route Post Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Rute Get Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Route Post Register
Route::post('/register', [RegisterController::class, 'store']);

// Route Get Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// Route Resource ('/dashboard/posts)
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::delete('/dashboard/posts/{post:slug}', [DashboardPostController::class,'destroy'])->middleware('auth');

// Route Admin
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');