<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users/{name?}', function ($name = null) {
    return "<h1>Users: $name</h1> ";
}) -> where('name', '[A-Za-z0-9]+');

Route::get('/product/{id}', function ($id = null) {
    return "<h1>Product: $id</h1> ";
}) -> where('id', '[0-9]+');