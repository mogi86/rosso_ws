<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Exception;

class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * 商品一覧画面表示
     */
    public function index()
    {
        $productList = $this->productService->getProductList();
        $data = [
            'productList' => $productList,
        ];

        return view('product.index', $data);
    }

    /**
     * 商品登録画面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * 商品新規登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $records = [
            'name'        => $request->input('name', ''),
            'genre'       => $request->input('genre', ''),
            'price'       => $request->input('price', ''),
            'description' => $request->input('description', ''),
        ];

        try {
            $this->productService->storeProduct($records);
            $request->session()->flash('info', '商品を登録しました。');
        } catch (Exception $e) {
            $request->session()->flash('error', '登録に失敗しました。');
        }
        return redirect(route('product::index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
