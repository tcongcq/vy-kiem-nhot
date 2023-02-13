<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'alias',
        'avatar',
        'title',
        'introduce',
        'content',
        'product_category_id',
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
        'product_category_id' => '',
        'is_show' => '',
        'order_num' => '',
        'views' => '',
        'attachments' => '',
        'tags' => '',
        'language' => '',
    ];

}