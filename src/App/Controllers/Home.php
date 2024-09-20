<?php

namespace App\Controllers;

class Home
{
    public function index()
    {
        echo 'home controller';
        require_once 'views/home_index.php';
    }

    // to show a single product
    public function show()
    {
        echo 'hello show';
        require_once 'views/product_show.php';
    }
}
