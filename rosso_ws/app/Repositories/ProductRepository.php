<?php

namespace App\Repositories;

use App\Entities\ProductEntity;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository
{
    public function new(array $record): ProductEntity
    {
        return new ProductEntity((new Product())->forceFill($record));
    }

    public function getProductList(): Collection
    {
        return collect(Product::all())
            ->map(function (Product $record) {
                return new ProductEntity($record);
            });
    }
}
