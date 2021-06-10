<?php

namespace App\Http\Repositories;

use App\Models\Product;
use Elasticsearch\Client;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Repositories\IProductsRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;


class ElasticsearchRepository implements IProductsRepository
{
    private $elasticsearch;
    public function __construct(Client $elasticsearch)
    {
        $this->elasticsearch = $elasticsearch;
    }

    public function search(string $query = ''): Collection
    {
        $items = $this->searchOnElasticsearch($query);
        return $this->buildCollection($items);
    }

    private function searchOnElasticsearch(string $query = ''): array
    {
        $model = new Product;
        $items = $this->elasticsearch->search([
            'index' => $model->getSearchIndex(),
            'type' => $model->getSearchType(),
            'body' => [
                'query' => [
                    'multi_match' => [
                        'fields' => ['name^2', 'description'],
                        'query' => $query,
                    ],
                ],
            ],
        ]);
        return $items;
    }

    private function buildCollection(array $items): Collection
    {
        $ids = Arr::pluck($items['hits'] ['hits'], '_id');
        

        return Product::findMany($ids)->sortBy(
            function($product) use($ids)
        {
            return array_search($product->getKey(), $ids);
        });
    }
}


?>