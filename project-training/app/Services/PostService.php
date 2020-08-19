<?php
namespace App\Http\Services;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostService {
    public function getAllPost() {
        $posts = Post::with('author')->get();
        return $posts;
    }
    public function getOwnPost($id) {
        $posts = DB::table('posts')->where('user_id',$id)->get();
        return $posts;
    }
    public function storePost($para , $id) {
        $post = Post::create([
           'title' => $para['title'],
           'content' => $para['content'],
           'user_id' => $id
        ]);
        return $post;
    }
}