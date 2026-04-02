<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = ['PC', '노트북', '태블릿', 'Mouse'];
        return view('welcome', compact('products'));
    }
}
