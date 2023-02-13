<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'alias',
        'avatar',
        'title',
        'introduce',
        'content',
        'post_category_id',
        'is_show',
        'order_num',
        'views',
        'attachments',
        'tags',
        'language',
    ];
    public $rules       = [
        'alias' => 'required',
        'avatar' => '',
        'title' => 'required',
        'introduce' => '',
        'content' => '',
        'post_category_id' => '',
        'is_show' => '',
        'order_num' => '',
        'views' => '',
        'attachments' => '',
        'tags' => '',
        'language' => '',
    ];

}