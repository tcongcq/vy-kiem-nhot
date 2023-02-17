<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{   
    public function __construct() {}

    public function getNews(){
        $locale = \App::getLocale();
        $categories = PostCategory::where('id', '>', 1)
                        ->where('language', $locale)
                        ->where('is_show', 1)
                        ->orderBy('order_num')
                        ->get();
        $category = \Request::get('cat');
        $posts = Post::where('language', $locale)
                    ->where('is_show', 1)
                    ->orderBy('order_num');
        if (!empty($category))
            $posts = $posts->where('post_category_id', $category);
        $posts = $posts->get();
    	return view('site.news.news', [
            'categories' => $categories,
            'posts'      => $posts
        ]);
    }

    public function getPostDetail($alias){
        $locale = \App::getLocale();
        $post = Post::where('alias', $alias)
                    ->where('language', $locale)
                    ->where('is_show', 1)
                    ->first();
        if (empty($post))
            abort(404);
        return view('site.news.post_detail', ['post'=>$post]);
    }

    public function getCategoryDetail($alias){
        return $alias;
    }
}

