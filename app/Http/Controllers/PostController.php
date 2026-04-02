<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // 이 아래에 코드를 입력하시기 바랍니다.
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }

    public function addPost()
    {
        return view('add-post');
    }

    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'subject' => $request->input('subject'),
            'content' => $request->input('content'),
        ]);

        return back()->with('post_created', '게시물이 성공적으로 추가되었습니다.');
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        if ($post) {
            return view('single-post', compact('post'));
        } else {
            return "게시물을 찾을 수 없습니다.";
        }
    }

    // 수정폼
    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        if ($post) {
            return view('edit-post', compact('post'));
        } else {
            return "게시물을 찾을 수 없습니다.";
        }
    }

    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'subject' => $request->input('subject'),
            'content' => $request->input('content'),
        ]);
        return back()->with('post_updated', '게시물이 성공적으로 수정되었습니다.');
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', '게시물이 성공적으로 삭제되었습니다.');
    }
}
