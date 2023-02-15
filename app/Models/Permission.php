<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'account_group_id',
        'permission_code',
        'value',
    ];
    public $rules       = [
        'account_group_id' => 'required',
        'permission_code' => 'required',
        'value' => 'required',
    ];

}