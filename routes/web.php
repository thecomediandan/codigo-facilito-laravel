<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', [PageController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/profile/{user}', [PageController::class, 'profile'])->name('profile.show');
    Route::get('/status', [PageController::class, 'status'])->name('status');

    Route::post('/friends/{user}', [FriendController::class, 'store'])->name('friends.store');
    Route::put('/friends/{user}', [FriendController::class, 'update'])->name('friends.update');
});

require __DIR__.'/auth.php';
