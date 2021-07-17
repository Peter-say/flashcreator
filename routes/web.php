<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\Admin\DashboardController;
use  App\Http\Controllers\Auth\Users;


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





Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('web.welcome.index');



Route::get('/admin/dashboard', [App\Http\Controllers\Auth\Admin\DashboardController::class, 'index'])->name('admin.dashboard');





Route::get('/dashboard', [App\Http\Controllers\Auth\Users\UsersController::class, 'users'])->name('dashboard');

Route::get('/dashboard/post-page', [App\Http\Controllers\Auth\Users\UsersController::class, 'postpage'])->name('dashboard.post-page');
Route::post('/dashboard/post-page', [App\Http\Controllers\Auth\Users\UsersController::class, 'store']);



// Route::get('/TASKS/task', [App\Http\Controllers\taskController::class, 'index'])->name('TASKS/task');
// Route::post('/TASKS/task', [App\Http\Controllers\taskController::class, 'store']);

