<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;


interface IProductsRepository
{
    public function search(string $query = ''):Collection;
}

?>