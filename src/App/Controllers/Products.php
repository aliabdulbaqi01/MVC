<?php

namespace App\Controllers;
use App\models\Product;

class Products
{
    public function index()
    {

        $model = new Product();
        $products = $model->getData();
        require_once 'views/product_index.php';
    }

    // to show a single product
    public function show()
    {
        echo 'hello show';
        require_once 'views/product_show.php';
    }
}
