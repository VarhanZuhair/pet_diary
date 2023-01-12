<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function (Product $product) {
    $product = DB::table('product')->limit(3)->get();
    return view('homepage', compact('product'));
})->name('homepage');

Route::get('/dashboard', function (Product $product) {
    $product = DB::table('product')->limit(3)->get();
    return view('dashboard', compact('product'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/review', [ProductController::class, 'view'])->middleware(['auth', 'verified'])->name('review');
Route::get('/reviewAdd', [ReviewController::class, 'create'])->middleware(['auth', 'verified'])->name('reviewAdd');
Route::post('/productPost', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->name('productPost');


Route::get('/forum', [ForumController::class, 'index'])->middleware(['auth', 'verified'])->name('forum');
Route::get('/forum/cat', [ForumController::class, 'cat'])->middleware(['auth', 'verified'])->name('cat');
Route::get('/forum/dog', [ForumController::class, 'dog'])->middleware(['auth', 'verified'])->name('dog');
Route::get('/forum/fish', [ForumController::class, 'fish'])->middleware(['auth', 'verified'])->name('fish');
Route::get('/forum/hamster', [ForumController::class, 'hamster'])->middleware(['auth', 'verified'])->name('hamster');
Route::get('/forum/bird', [ForumController::class, 'bird'])->middleware(['auth', 'verified'])->name('bird');
Route::get('/forum/rabbit', [ForumController::class, 'rabbit'])->middleware(['auth', 'verified'])->name('rabbit');

// EDIT FORUM
Route::get('/forum/{forum}', [ForumController::class, 'edit'])->middleware(['auth', 'verified'])->name('forumUpdate');
Route::post('/forumUpdate', [ForumController::class, 'update'])->middleware(['auth', 'verified']);

Route::get('/forum/cat/post', [ForumController::class, 'catPost'])->middleware(['auth', 'verified']);
Route::post('/forum/cat/store', [ForumController::class, 'catStore'])->middleware(['auth', 'verified']);

Route::get('/forum/dog/post', [ForumController::class, 'dogPost'])->middleware(['auth', 'verified']);
Route::post('/forum/dog/store', [ForumController::class, 'dogStore'])->middleware(['auth', 'verified']);

Route::get('/forum/rabbit/post', [ForumController::class, 'rabbitPost'])->middleware(['auth', 'verified']);
Route::post('/forum/rabbit/store', [ForumController::class, 'rabbitStore'])->middleware(['auth', 'verified']);

Route::get('/forum/fish/post', [ForumController::class, 'fishPost'])->middleware(['auth', 'verified']);
Route::post('/forum/fish/store', [ForumController::class, 'fishStore'])->middleware(['auth', 'verified']);

Route::get('/forum/bird/post', [ForumController::class, 'birdPost'])->middleware(['auth', 'verified']);
Route::post('/forum/bird/store', [ForumController::class, 'birdStore'])->middleware(['auth', 'verified']);

Route::get('/forum/hamster/post', [ForumController::class, 'hamsterPost'])->middleware(['auth', 'verified']);
Route::post('/forum/hamster/store', [ForumController::class, 'hamsterStore'])->middleware(['auth', 'verified']);










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
