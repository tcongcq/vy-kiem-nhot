<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'code',
        'name',
        'default',
        'attribs',
    ];
    public $rules       = [
        'code' => 'required',
        'name' => 'required',
        'default' => '',
        'attribs' => '',
    ];

}