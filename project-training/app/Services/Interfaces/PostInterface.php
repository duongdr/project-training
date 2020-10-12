<?php

namespace App\Http\Services\Interfaces;

interface PostInterface
{
    public function findAllPost($offset, $limit, $searchTerm, $order);

    public function countPosts($offset, $limit, $searchTerm);

    public function getAllPosts();

    public function getOwnPost($id);

    public function storePost($para, $id);

    public function deleteOnePost($id);
}
