<?php

class ProductController extends Controller
{
    public function index()
    {
        $productModel = $this->model('Product');
        $products = $productModel->getAllProducts();
        $this->view('shop/products', ['products' => $products]);
    }

    public function show($id)
    {
        $productModel = $this->model('Product');
        $product = $productModel->getProductById($id);

        if ($product) {
            $this->view('shop/product', ['product' => $product]);
        } else {
            echo "Product not found";
        }
    }
}
