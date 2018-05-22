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
    public function getName(): string
    {
        return $this->record->name;
    }

    /**
     * ジャンルを返す
     *
     * @return string ジャンル
     */
    public function getGenre(): string
    {
        return $this->record->genre;
    }

    /**
     * 値段を返す
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->record->price;
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
