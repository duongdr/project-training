<?php

namespace App\Http\Services;

use App\Models\Post;
use App\Models\User;

class PostService
{
    public function findAllPost($offset, $limit, $searchTerm, $order)
    {

        return Post::with('author','category')->where('title', 'LIKE', "%{$searchTerm}%")
            ->orWhere('content', 'LIKE', "%{$searchTerm}%")
            ->offset($offset)->limit($limit)->orderBy('title', $order)->get();
    }

    public function countPosts($offset, $limit, $searchTerm)
    {
        return Post::where('title', 'LIKE', "%{$searchTerm}%")
            ->orWhere('content', 'LIKE', "%{$searchTerm}%")->count();
    }

    public function getAllPosts()
    {
        return Post::with('author')->get();
    }

    public function getOwnPost($id)
    {
        $posts = Post::where('user_id', $id)->get();
        return $posts;
    }

    public function storePost($para, $id)
    {
        $post = Post::create([
            'title' => $para['title'],
            'content' => $para['content'],
            'description' => $para['description'],
            'user_id' => $id,
            'category_id' => $para['category_id']
        ]);
        return $post;
    }

    public function deleteOnePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return 'OK';
    }

    public function Role($id)
    {
        $user = User::find($id);
        $role = $user->role;
        return $role;
    }
}
