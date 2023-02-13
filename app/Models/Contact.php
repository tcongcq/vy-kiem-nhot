<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone',
        'subject',
        'message',
        'status',
    ];
    public $rules       = [
        'contact_name' => 'required',
        'contact_email' => '',
        'contact_phone' => '',
        'subject' => '',
        'message' => '',
        'status' => '',
    ];

}