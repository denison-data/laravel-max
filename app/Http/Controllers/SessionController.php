<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // 이 아래에 코드를 입력하시기 바랍니다.
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name')) {
            $name = $request->session()->get('name');
            return "세션에서 name 키의 값 : " . $name;
        } else {
            return "세션에 name 키가 존재하지 않습니다.";
        }
    
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('name', 'Join'); // session['name] = join 과 비슷
        // return "세션에 name 키로 홍길동 값을 저장했습니다.";
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name'); // session에서 name 키 제거
        return "세션에서 name 키를 제거했습니다.";
    }

}
