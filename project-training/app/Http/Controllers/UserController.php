<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUser();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        $this->userService->storeUser($request);
        return redirect()->back()->with('message', 'IT WORKS!');

    }


     public function show(User $id)
     {
         return view('admin.user.edit',['user'=>$id]);
     }

     /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request,User $user)
    {
        $data = $request->all();
        $user->fill($data);
        $password = $data['password'];
        $user->password = Hash::make($password);

        DB::beginTransaction();
        try {
            $user->save();
            DB::commit();
                return redirect('/admin/user');
        } catch (\Exception $e) {
            throwException($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mess = $this->userService->deleteOneUser($id);
        return redirect()->back()->with($mess);

    }

//    public function store(UserRequest $request)
//    {
//        DB::beginTransaction();
//        try {
//            $this->userService->storeUser($request);
//            DB::commit();
//            return redirect()->back()->with('message', 'IT WORKS!');
//        } catch (Exception $e) {
//            DB::rollback();
//            Log::error($e->getMessage());
//            throw $e;
//        }
//
//    }
}
