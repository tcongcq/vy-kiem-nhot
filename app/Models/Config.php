<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        'code',
        'attrib',
        'value',
        'language'
    ];
    public $rules       = [
        'code'      => 'required',
        'attrib'    => 'required',
        'value'     => '',
        'language'  => '',
    ];

}