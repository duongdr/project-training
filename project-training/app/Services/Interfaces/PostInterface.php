<?php

namespace App\Http\Services\Interfaces;

interface PostInterface {
    public function findAllPost($offset, $limit, $searchTerm, $order);
    
}
