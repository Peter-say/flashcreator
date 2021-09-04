<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\Admin\DashboardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;


/*
|-----------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('web.welcome.index');



Auth::routes(['verify' => true]);
Route::prefix("Admin")->as("Admin.")->namespace("Admin")->middleware(["verified"])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Auth\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/users', [App\Http\Controllers\Auth\Admin\UsersController::class, 'users'])->name('dashboard.users');
    Route::get('/users/page', [App\Http\Controllers\Auth\Admin\UsersController::class, 'userslist'])->name('users.page');
});


Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('/blog', BlogController::class);
   Route::resource('/category', CategoryController::class);
});

Route::resource('/comment', CommentController::class);







Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home')->middleware('auth');
Route::post('/comment/{Blog}/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');




// 
