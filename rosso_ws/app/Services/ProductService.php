<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Entities\ProductEntity;
use Illuminate\Support\Collection;
use Exception;

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
     * @return Collection 商品一覧リスト
     */
    public function getProductList(): Collection
    {
        return $this->productRepository->getProductList();
    }

    /**
     * 商品登録
     *
     * @param array $records 商品情報
     * @throws Exception
     */
    public function storeProduct(array $records)
    {
        $entity = $this->productRepository->new($records);

        try {
            $this->productRepository->persist($entity);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
