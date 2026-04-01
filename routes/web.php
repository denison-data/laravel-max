<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StringController;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [ProductController::class, 'index']) -> name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index']) -> name('home.index');

Route::get('/user', [UserController::class, 'index']) -> name('user.index');

// Route::get('/user/{name?}', function ($name = null) {
//     $name = $name ?? "안녕하세요";
//     $age = 15;
//     $memo = $name . '님은 ' . $age . '세입니다.';
//     $data = compact('name', 'age', 'memo');
//     return view('user', $data);
// });

Route::get('/test1', function () {
    return view('test1', ['name' => '<b>홍길동</b>', 'testname' => '<font color="red">테스트이름</font>']);
});

Route::get('/posts', [ClientController::class, 'getAllPost']) -> name('posts.getAllPost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById']) -> name('posts.getPostById');
Route::get('/add-post', [ClientController::class, 'addPost']) -> name('posts.addPost');
Route::get('/update-post', [ClientController::class, 'updatePost']) -> name('posts.updatePost');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost']) -> name('posts.deletePost');

Route::get('/string', [StringController::class, 'index']) -> name('string.index');
Route::get('/array', [ArrayController::class, 'index']) -> name('array.index');

Route::get('/login', [LoginController::class, 'index']) -> name('login.index');