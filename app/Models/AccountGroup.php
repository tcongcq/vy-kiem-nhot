<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    protected $fillable = [
        'group_code',
        'group_name',
        'note',
    ];
    public $rules       = [
        'group_code' => 'required',
        'group_name' => 'required',
        'note' => 'required',
    ];

}