<?php
namespace App\Http\Services;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostService {
    public function getAllPost($offset, $limit) {
        $posts = Post::with('author')->offset($offset)->limit($limit)->get();
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
    public function deleteOnePost($id) {
        $post = Post::find($id);
        $post->delete();
        return 'OK';
    }
    public function Role($id) {
        $user = User::find($id);
        $role = $user->role;
        return $role;
    }
}
