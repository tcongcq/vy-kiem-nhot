<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Product;
use App\Models\Language;
use App\Models\ProductCategory;

class ProductController extends API
{   
    public function __construct() {
        $this->M = new Product();
        $this->view = 'admin.pages.products';
        $this->validator_msg = [];
    }

    public function getIndex(){
        return view($this->view, [ 
            'languages' => Language::all(),
            'product_categories' => ProductCategory::where('id','>',1)->get()
        ]);
    }

    protected function callback_index($data){
        foreach ($data['rows'] as $row){
            $row->product_category_info = ProductCategory::find($row->product_category_id);
        }
        return $data;
    }
}

