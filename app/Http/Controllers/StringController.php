<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StringController extends Controller
{
    //

    public function index()
    {
        echo '<h1>문자열 컨트롤러</h1>';

        echo "Str::of('Welcome to my Youtube Channel')->after('Welcome to');";
        $rs = Str::of('Welcome to my Youtube Channel')->after('Welcome to');
        echo "<br>결과 : " . $rs . "<br><br>";

        echo "Str::of('This is my name')->before('my');";
        $rs = Str::of('This is my name')->before('my');
        echo "<br>결과 : " . $rs . "<br><br>";

        echo "Str::of('010-1234-5678')->afterLast('-');";
        $rs = Str::of('010-1234-5678')->afterLast('-');
        echo "<br>결과 : " . $rs . "<br><br>";

        echo "Str::of('Laravel 9.0')->replace('9.0', '10.0');";
        $rs = Str::of('Laravel 9.0')->replace('9.0', '10.0');
        echo "<br>결과 : " . $rs . "<br><br>";  
    
        echo "Str::of('Laravel 10 Framework')->slug();";
        $rs = Str::of('Laravel 10 Framework')->slug();
        echo "<br>결과 : " . $rs . "<br><br>";

        echo "Str::of('-')->repeat(10);";
        $rs = Str::of('-')->repeat(10);
        echo "<br>결과 : " . $rs . "<br><br>";

        echo "Str::random(20);";
        $rs = Str::random(20);
        echo "<br>결과 : " . $rs . "<br><br>";

        echo "Str::of('Peter Piper picked a peck of pickled peppers')->remove('e');";
        $rs = Str::of('Peter Piper picked a peck of pickled peppers')->remove('e');
        echo "<br>결과 : " . $rs . "<br><br>";

        $rs = Str::of('This is a name')->containsAll(['This', 'name']);
        echo "Str::of('This is a name')->containsAll(['This', 'name']);";
        echo "<br>결과 : " . ($rs ? 'true' : 'false') . "<br><br>";

        $rs = Str::of('Hello ') ->append('World!!!');
        echo "Str::of('Hello ') ->append('World!!!');";
        echo "<br>결과 : " . $rs . "<br><br>";
    
        // 기타 메소드 : afterLast, beforeLast, between, contains, containsAll, endsWith, is, length, limit, lower, match, plural, random, replaceArray, replaceFirst, replaceLast, start, startsWith, substr, title, upper 
        
    }
}