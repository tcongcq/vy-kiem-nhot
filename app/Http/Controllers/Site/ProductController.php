<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{   
    public function __construct() {}

    public function getProducts(){
    	return view('site.products.products');
    }

    public function getProductDetail($alias){
        return view('site.products.product-detail');
        // return $alias;
    }

    public function getCategoryDetail($alias){
        return view('site.products.product-category');
        // return $alias;
    }
}

