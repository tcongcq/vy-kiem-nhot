<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = [
        'code',
        'attrib',
        'value',
    ];
    public $rules       = [
        'code' => 'required',
        'attrib' => 'required',
        'value' => '',
    ];

}