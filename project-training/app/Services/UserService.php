<?php
namespace App\Http\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService {
    public function getAllUser() {
        return User::withCount('posts')->get();
    }
    public function storeUser($para) {
        $user = User::create([
            'name' => $para['name'],
            'email' => $para['email'],
            'password' => Hash::make($para['password']),
            'role' => $para['role']
        ]);
        return $user;
    }
    public function findOneUser($para) {
        $user = User::find($para);
        return $user;
    }
    public function deleteOneUser($id) {
        $user = $this->findOneUser($id);
        $user->delete();
        return 'OK';
    }
}
