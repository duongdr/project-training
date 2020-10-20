<?php

namespace App\Http\Services;

use App\Models\Category;
class CategoryService
{
    public function findAllPost($offset, $limit, $searchTerm, $order)
    {

        return Category::all()->where('name', 'LIKE', "%{$searchTerm}%")
            ->offset($offset)->limit($limit)->orderBy('title', $order)->get();
    }

    public function countPosts($offset, $limit, $searchTerm)
    {
        return Category::where('name', 'LIKE', "%{$searchTerm}%")->count();
    }

    public function getAllCategory()
    {
        return Category::all();
    }

    public function storeCategory($para)
    {
        $category = Category::create([
            'name' => $para['name'],
        ]);
        return $category;
    }

    public function deleteOneCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return 'OK';
    }
}

