<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $posts = Post::count();
        return view('admin.dashboard.index',compact('posts','users'));
    }
}
