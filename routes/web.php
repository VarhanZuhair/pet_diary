<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/review', [ProductController::class, 'view'])->middleware(['auth', 'verified'])->name('review');
Route::get('/reviewAdd', [ReviewController::class, 'create'])->middleware(['auth', 'verified'])->name('reviewAdd');
Route::post('/productPost', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->name('productPost');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('register', [UserController::class, 'registrer'])->name('register');
Route::get('register_action', [UserController::class, 'registrer.action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::get('password', [UserController::class, 'password_action'])->name('password_action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');





require __DIR__.'/auth.php';
