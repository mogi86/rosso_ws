<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Entities\ProductEntity;
use Illuminate\Support\Collection;

class ProductService
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * ProductService constructor.
     *
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * 商品一覧取得
     *
     * @return Collection
     */
    public function getProductList(): Collection
    {
        return $this->productRepository->getProductList();
    }
}
