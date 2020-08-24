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
//        $user = User::find($id);
//        $role = $user['role'];
        $role = $this->postService->Role($id);
        if ($role == 1) {
            $posts = $this->postService->getAllPosts();
            return view('admin.post.index', ['posts' => $posts]);
        } else {
            $posts = $this->postService->getOwnPost($id);
            return view('user.post.index', ['posts' => $posts]);
        }

        // dd($posts);
    }

    public function indexTest()
    {
        return view('admin.post.index-test');
    }

    public function getJson(Request $request)
    {

        $search = $request->query('search');
        $searchTerm = $search['value'];

        $posts = $this->postService->findAllPost(intval($request->query('start')), intval($request->query('length')), $searchTerm);
        $total = $this->postService->countPosts(intval($request->query('start')), intval($request->query('length')), $searchTerm);

        return ['recordsTotal' => $total, "recordsFiltered" => $total, 'data' => $posts];
    }


    public function create()
    {
        return view('admin.post.create');
    }


    public function store(Request $request)
    {
        $id = Auth::id();
        $this->postService->storePost($request, $id);
        return redirect()->back()->with('message', 'IT WORKS!');
    }


    public function show(Post $id)
    {
        $ids = Auth::id();
        $role = $this->postService->Role($ids);
        if ($role == 1) {
            return view('admin.post.edit', ['post' => $id]);
        } else {
            return view('user.post.edit', ['post' => $id]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
        $id = Auth::id();
        $role = $this->postService->Role($id);
        DB::beginTransaction();
        try {
            $post->save();
            DB::commit();
            if ($role == 1) {
                return redirect('/admin/post');
            } else {
                return redirect('/user/post');
            }

        } catch (\Exception $e) {
            throwException($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $mess = $this->postService->deleteOnePost($id);
        return redirect()->back()->with($mess);
    }
}
