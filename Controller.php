<?php

class Controller {
    public function index()
    {
        require_once __DIR__ . '/model.php';

        $model = new Model();
        $products = $model->getData();
        require_once __DIR__ . '/view.php';



    }
}
