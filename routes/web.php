<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SessionController;

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

Route::get('/',[ProductController::class,'index'])->name('product.index');

Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');

Route::get('/user',[UserController::class,'index'])->name('user.index');

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllPosts');

Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getPostById');

Route::get('/add_post',[ClientController::class,'addPost'])->name('posts.addPost');

Route::get('/update_post',[ClientController::class,'updatePost'])->name('posts.updatePost');

Route::get('/delete_post/{id}',[ClientController::class,'deletePost'])->name('posts.deletePost');

Route::get('/fluent_string',[FluentController::class,'index'])->name('fluent.index');

Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkUser');

Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

Route::get('/send-email',[MailController::class,'sendEmail']);

Route::get('/upload',[UploadController::class,'uploadForm']);

Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadFile');

Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');

Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');

Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');