<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Post;
use App\Models\Language;
use App\Models\PostCategory;

class PostController extends API
{   
    public function __construct() {
        $this->M = new Post();
        $this->view = 'admin.pages.posts';
        $this->validator_msg = [];
    }

    public function getIndex(){
        return view($this->view, [ 
            'languages' => Language::all(),
            'post_categories' => PostCategory::where('id','>',1)->get()
        ]);
    }

    protected function callback_index($data){
        foreach ($data['rows'] as $row){
            $row->post_category_info = PostCategory::find($row->post_category_id);
        }
        return $data;
    }

}

