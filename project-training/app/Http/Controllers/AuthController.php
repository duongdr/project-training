<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return redirect('login')->with(['error' => 'Invalid user']);
        } else {
            $id = Auth::id();
            $user = User::find($id);
            $role = $user['role'];
            if ($role == 1) {
                return redirect('admin/home');
            } else {
                return redirect('user/home');
            }
        }

    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
