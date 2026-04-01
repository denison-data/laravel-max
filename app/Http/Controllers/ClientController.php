<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public $api_base_url = "http://jsonplaceholder.typicode.com/";

    public function getAllPost() :array
    {
        $response = Http::get($this->api_base_url."posts");
        return $response->json();
    }

    public function getPostById($id) :array
    {
        $response = Http::get($this->api_base_url."posts/".$id);
        return $response->json();
    }

    public function addPost() :array
    {
        $post = Http::post($this->api_base_url."posts", [
            "title" => "추가된내용",
            "body" => "안녕 추가됨",
            "userId" => 1
        ]);

        return $post->json();
    }

    public function updatePost() :array
    {
        $response = Http::put($this->api_base_url."posts/1", [
            "title" => "수정된내용",
            "body" => "안녕 수정됨",
        ]);

        return $response->json();
    }
    
    public function deletePost($id) :array
    {
        $response = Http::delete($this->api_base_url."posts/".$id);
        return $response->json();
    }
    //
}
