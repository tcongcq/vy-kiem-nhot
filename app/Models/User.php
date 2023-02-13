<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'profile_pic',
        'fullname',
        'gender',
        'phone',
        'email',
        'address',
        'note',
    ];
    public $rules       = [
        'profile_pic' => '',
        'fullname' => 'required',
        'gender' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'address' => 'required',
        'note' => '',
    ];

}