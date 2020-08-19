<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Services\PostService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    protected $postService;

    /**
     * ExamController constructor.
     *
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $role = $user['role'];
        if ($role == 1) {
            $posts = $this->postService->getAllPost();
            return view('admin.post.index',compact('posts'));
        } else {
            $posts = $this->postService->getOwnPost($id);
            return view('user.post.index', ['posts' => $posts]);
        }

       // dd($posts);
    }


    public function create()
    {
        return view('admin.post.create');
    }


    public function store(Request $request)
    {
        $id = Auth::id();
        $this->postService->storePost($request,$id);
        return redirect()->back()->with('message', 'IT WORKS!');
    }


    public function show(Post $id)
    {
        return view('user.post.edit',['post'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $post->fill($data);
        DB::beginTransaction();
        try {
            $post->save();
            DB::commit();
            return redirect('/user/post/index');
        } catch (\Exception $e) {
            throwException($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
