<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home/{name?}', [HomeController::class, 'index']) -> name('home.index');

Route::get('/user/{name?}', function ($name = null) {
    $name = $name ?? "안녕하세요";
    $age = 15;
    return view('user', compact('name', 'age'));
});

Route::get('/test1', function () {
    return view('test1', ['name' => '홍길동']);
});