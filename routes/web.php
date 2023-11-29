<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CharacterController;
use App\Models\Post;
use App\Models\Character;

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

Route::get('/', [PostController::class, 'index'])->name('Home');
Route::get('/posts/create', [PostController::class, 'create'])->name('create');
Route::post('/posts', [Postcontroller::class, 'store']);
Route::get('/posts/{post}', [PostController::class ,'show']);

Route::get('/characters/search', [CharacterController::class, 'search'])->name('search');
Route::get('/characters/search_my', [CharacterController::class, 'search_my'])->name('search_my');
Route::get('/characters/search_vs', [CharacterController::class, 'search_vs'])->name('search_vs');
Route::get('/characters/search_myvs', [CharacterController::class, 'search_myvs'])->name('search_myvs');
Route::get('/characters/my/{character}', [CharacterController::class, 'index_my']);
Route::get('/characters/vs/{character}', [CharacterController::class, 'index_vs']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
