<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{   
    public function __construct() {}

    public function getProducts(){
        $locale = \App::getLocale();
        $products = ProductCategory::where('language', $locale)
                    ->where('is_show', 1)
                    ->orderBy('order_num')
                    ->get();
    	return view('site.products.products', ['products'=>$products]);
    }

    public function getProductDetail($alias){
        $locale = \App::getLocale();
        $product = Product::where('alias', $alias)
                    ->where('language', $locale)
                    ->where('is_show', 1)
                    ->first();
        $related_products = Product::where('id', '<>', $product->id)
                    ->where('language', $locale)
                    ->where('is_show', 1)
                    ->where('product_category_id', $product->product_category_id)
                    ->get();
        $product_categories = ProductCategory::where('language', $locale)
                    ->where('is_show', 1)
                    ->orderBy('order_num')
                    ->get();
        return view('site.products.product-detail', [
            'product'=>$product,
            'related_products'=>$related_products,
            'product_categories'=>$product_categories
        ]);
        // return $alias;
    }

    public function getCategoryDetail($alias){
        $locale = \App::getLocale();
        $category = ProductCategory::where('id', '>', 1)
                        ->where('alias', $alias)
                        ->where('language', $locale)
                        ->where('is_show', 1)
                        ->first();
        if (empty($category))
            abort(404);
        return view('site.products.product-category', ['category'=>$category]);
    }
}

