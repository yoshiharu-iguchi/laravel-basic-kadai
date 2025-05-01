<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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


// 投稿フォーム表示用
Route::get('/posts/create',[PostController::class,'create']);
// 投稿データ保存用
Route::post('/posts',[PostController::class,'store'])->name('posts.store');

Route::get('/posts',[PostController::class,'index'])->name('posts.index');