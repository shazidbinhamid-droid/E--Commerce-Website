<?php

class CartController extends Controller
{
    public function index()
    {
        $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $productModel = $this->model('Product');
        $products = [];
        $total = 0;

        foreach ($cartItems as $id => $quantity) {
            $product = $productModel->getProductById($id);
            if ($product) {
                $product['qty'] = $quantity;
                $products[] = $product;
                $total += $product['price'] * $quantity;
            }
        }

        $this->view('shop/cart', ['products' => $products, 'total' => $total]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_id = $_POST['product_id'];
            $quantity = isset($_POST['quantity']) ? (int) $_POST['quantity'] : 1;

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if (isset($_SESSION['cart'][$product_id])) {
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                $_SESSION['cart'][$product_id] = $quantity;
            }

            $this->redirect('/cart');
        }
    }

    // Add remove/update methods later
}
