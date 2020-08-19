<?php
namespace App\Http\Services;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostService {
    public function getAllPost() {
        $posts = Post::with('author')->get();
        return $posts;
    }
//    public function storePost($para) {
//        $id = Auth::id();
//        return $id;
//    }
}
