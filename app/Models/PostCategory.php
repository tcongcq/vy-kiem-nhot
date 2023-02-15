<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
        'alias',
        'image',
        'name',
        'description',
        'is_show',
        'order_num',
        'language',
        'note',
    ];
    public $rules       = [
        'alias' => 'required',
        'image' => '',
        'name' => 'required',
        'description' => '',
        'is_show' => 'required',
        'order_num' => 'required',
        'language' => '',
        'note' => '',
    ];

}