<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArrayController extends Controller
{
    //
    public function index()
    {
        echo '<h1>배열 컨트롤러</h1>';

        $arr = [100, 200, 300, 400, 500];

        // $rs = Arr::first($arr, function($value, $key) {
        //     return $value < 300;
        // });
        // echo "Arr::first(\$arr, function(\$value, \$key) { return \$value < 250; });";
        // echo "<br>결과 : " . $rs . "<br><br>";


        echo "Arr::add(\$arr, 'a', 100);";
        $rs = Arr::add($arr, 'a', 100);
        echo "<br>결과 : ";
        print_r($rs);
        echo "<br><br>";

        $array = ['name' => '홍길동', 'price' => null];
        $result = Arr::add($array, 'price', 1000);
        echo "Arr::add(\$array, 'price', 1000);";   
        echo "<br>결과 : ";
        print_r($result);
        echo "<br><br>";

        // flatten()
        $array = ['name' => 'Joe', 'hobbies' => ['sports', 'music']];
        print_r($array);
        echo "<br><br>";

        $result = Arr::flatten($array);
        
        print_r($result);
        echo "<br><br>";

        $array = ['products' => ['desk' => ['price' => 100, 'quality' => 'good']], 'orders' => ['desk']];
        $result = Arr::dot($array);
        echo "Arr::dot(\$array);";
        echo "<br>결과 : ";
        print_r($result);
        echo "<br><br>";

        $arr = ['name' => '홍길동', 'age' => 30];
        echo "Arr::except(\$arr, ['age']);";
        $rs = Arr::except($arr, ['age']);
        echo "<br>결과 : ";
        print_r($rs);
        echo "<br><br>";

        $arr = ['name' => '홍길동', 'age' => 30];
        echo "Arr::only(\$arr, ['name']);";
        $rs = Arr::only($arr, ['name']);
        echo "<br>결과 : ";
        print_r($rs);
        echo "<br><br>";

        $array = ['products' => ['desk' => ['price' => 100, 'quality' => 'good']], 'orders' => ['desk']];
        $price = Arr::get($array, 'products.desk.price', 9999);
        echo "Arr::get(\$array, 'products.desk.price', 9999);";
        echo "<br>결과 : " . $price . "<br><br>";

        $array = ['Tailwind', 'Airpine', 'Laravel', 'Livewire'];
        $joined = Arr::join($array, ', ');
        echo "Arr::join(\$array, ', ');";
        echo "<br>결과 : " . $joined . "<br><br>";

        // 기타 메소드 : after, before, collapse, crossJoin, divide, dot, except, first, flatten, forget, get, has, isAssoc, join, last, map, only, pluck, prepend, pull, random, set, shuffle, sort, sortDesc, where   

    }
}
