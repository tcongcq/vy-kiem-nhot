<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'account_id',
        'account_group_id',
    ];
    public $rules       = [
        'account_id' => 'required',
        'account_group_id' => 'required',
    ];

}