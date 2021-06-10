<?php

namespace App\Http\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Http\Repositories\IProductsRepository;


class EloquentRepository implements IProductsRepository
{
    public function search(string $query = ''):LengthAwarePaginator
    {
        return Product::query()
        ->where('name', 'like', "%{$query}%")
        ->paginate();
    }
}

?>