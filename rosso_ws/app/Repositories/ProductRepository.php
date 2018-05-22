<?php

namespace App\Repositories;

use App\Entities\ProductEntity;
use App\Models\Product;

class ProductRepository
{
    public function new(array $record): ProductEntity
    {
        return new ProductEntity((new Product())->forceFill($record));
    }
}
