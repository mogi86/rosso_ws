<?php

namespace App\Entities;

use App\Models\Product;

class ProductEntity
{
    /**
     * @var Product
     */
    private $record;

    /**
     * コンストラクタ
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->record = $product;
    }

    /**
     * 商品名を返す
     *
     * @return string 商品名
     */
    public function getNmae(): string
    {
        return $this->record->naem;
    }

    /**
     * モデルを返す
     *
     * @return Product
     */
    public function getRecord(): Product
    {
        return $this->record;
    }
}
