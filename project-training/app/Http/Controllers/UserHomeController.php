<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        return view('user.home.index');
    }
}
