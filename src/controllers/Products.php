<?php

class Products {
    public function index()
    {
        require_once  'src/models/Product.php';

        $model = new Product();
        $products = $model->getData();
        require_once 'views/product_index.php';
    }

    // to show a single product
    public function show()
    {
        require_once  'src/models/Product.php';
        echo 'hello show';
        require_once  'views/product_show.php';
    }
}
