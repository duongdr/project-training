<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\Interfaces\PostInterface;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    protected $categoryService;

    /**
     * ExamController constructor.
     *
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function indexTest()
    {
        return view('admin.category.index');
    }

    public function getJson(Request $request)
    {

        $search = $request->query('search');
        $searchTerm = $search['value'];
        $sort = $request->query('order');
        $order = $sort['0']['dir'];

        $posts = $this->categoryService->findAllPost(intval($request->query('start')), intval($request->query('length')), $searchTerm, $order);
        $total = $this->categoryService->countPosts(intval($request->query('start')), intval($request->query('length')), $searchTerm);

        return ['recordsTotal' => $total, "recordsFiltered" => $total, 'data' => $posts];
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $this->categoryService->storeCategory($request);
        return redirect()->back()->with('message', 'IT WORKS!');
    }


    public function show(Category $id)
    {
        return view('admin.category.edit', ['categories' => $id]);
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
    public function update(Request $request, Category $category)
    {
        $data = $request->all();
        $category->fill($data);
        DB::beginTransaction();
        try {
            $category->save();
            DB::commit();
            return redirect('/admin/category');

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
        $mess = $this->categoryService->deleteOneCategory($id);
        return redirect()->back()->with($mess);
    }
}

