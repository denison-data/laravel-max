<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 이 아래에 코드를 입력하시기 바랍니다.
    public function index(Request $request)
    {
        echo "method() <br>";
        echo $request->method();
        echo "<br>";
        echo $request->url();
        echo "<br>";
        echo $request->fullUrl();
        echo "<br>";
        echo $request->path();
    }
}
