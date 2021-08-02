<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\Admin\DashboardController;
use App\Http\Controllers\Auth\Users\BlogController;
use App\Http\Controllers\CommentController;


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



Auth::routes(['verify' => true]);
Route::prefix("admin")->as("admin.")->namespace("Admin")->middleware(["verified"])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Auth\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard/users', [App\Http\Controllers\Auth\Admin\UsersController::class, 'users'])->name('dashboard.users');
});




Route::get('/home', [App\Http\Controllers\Auth\Users\BlogController::class, 'users'])->name('home')->middleware('auth');
Route::get('/post-page', [App\Http\Controllers\Auth\Users\BlogController::class, 'postpage'])->name('post-page')->middleware('auth');
Route::post('/post-page', [App\Http\Controllers\Auth\Users\BlogController::class, 'store']);
Route::post('/comment/{Blog}/store', [App\Http\Controllers\CommentController::class , 'store'])->name('comment.add');




Route::get('/TASKS/task', [App\Http\Controllers\taskController::class, 'index'])->name('TASKS/task');
Route::post('/TASKS/task', [App\Http\Controllers\taskController::class, 'store']);

