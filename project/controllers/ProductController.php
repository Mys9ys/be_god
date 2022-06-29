<?php

namespace project\controllers;

use Core\Controller;

class ProductController extends Controller
{
    public $products;

    public function __construct(){
        $this->products = [
            1 => [
                'name'     => 'product1',
                'price'    => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name'     => 'product2',
                'price'    => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name'     => 'product3',
                'price'    => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name'     => 'product4',
                'price'    => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name'     => 'product5',
                'price'    => 500,
                'quantity' => 9,
                'category' => 'category3',
            ],
        ];

    }

    public function all($params){

        return $this->render('product/all', ['products' => $this->products]);
    }

    public function show($params){
        $this->title = 'product: ' . $this->products[$params['id']]['name'];

        return $this->render('product/show', ['product' => $this->products[$params['id']]]);
    }

}