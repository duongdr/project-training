<?php

namespace App\Http\Services\Interfaces;

interface UserInterface
{
    public function getAllUser();

    public function findAllUsers($offset, $limit, $searchTerm, $order);

    public function countUsers($offset, $limit, $searchTerm);

    public function storeUser($para);

    public function findOneUser($para);

    public function deleteOneUser($id);
}
