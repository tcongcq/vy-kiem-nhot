<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Language;
use App\Models\PostCategory;

class PostCategoryController extends API
{   
    public function __construct() {
        $this->M = new PostCategory();
        $this->view = 'admin.pages.post_categories';
        $this->validator_msg = [];
    }

    public function getIndex(){
        return view($this->view, [ 'languages' => Language::all() ]);
    }

    protected function prepare_index(){
        return $this->M->where('id', '>', 1);
    }
}

