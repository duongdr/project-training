<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function getAllUser()
    {
        return User::withCount('posts')->get();
    }

    public function findAllUsers($offset, $limit, $searchTerm, $order)
    {
        return User::query()->withCount('posts')->where('name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('email', 'LIKE', "{$searchTerm}")->orderBy('name',$order)
            ->offset($offset)->limit($limit)->get();
    }
    public function countUsers($offset, $limit, $searchTerm )
    {
        return User::query()->where('name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('email', 'LIKE', "{$searchTerm}")->count();
    }
    public function storeUser($para)
    {
        $user = User::create([
            'name' => $para['name'],
            'email' => $para['email'],
            'password' => Hash::make($para['password']),
            'role' => $para['role']
        ]);
        return $user;
    }

    public function findOneUser($para)
    {
        $user = User::find($para);
        return $user;
    }

    public function deleteOneUser($id)
    {
        $user = $this->findOneUser($id);
        $user->delete();
        return 'OK';
    }
}
