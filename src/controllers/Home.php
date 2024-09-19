<?php

class Home {
    public function index()
    {
        echo 'home controller';
       require_once 'views/home_index.php';
    }

    // to show a single product
    public function show()
    {
        require_once  'src/models/Product.php';
        echo 'hello show';
        require_once  'views/product_show.php';
    }
}
