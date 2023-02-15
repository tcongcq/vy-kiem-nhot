<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class PostController extends Controller
{   
    public function __construct() {}

    public function getNews(){
    	return view('site.news.news');
    }

    public function getPostDetail($alias){
        // return $alias;
        return view('site.news.post_detail');
    }

    public function getCategoryDetail($alias){
        return $alias;
    }
}

