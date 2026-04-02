<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 이 아래에 코드를 입력하시기 바랍니다.
    public function index()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $validationData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
        
       // return $request->all();
        $email = $request->input('email');
        $password = $request->input('password');

        return "이메일 : " . $email . "<br>비밀번호 : " . $password;

    }
}
