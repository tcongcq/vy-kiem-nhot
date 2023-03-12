<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone',
        'title',
        'order',
        'position',
        'language',
        'is_show'
    ];
    public $rules       = [
        'contact_name'  => 'required',
        'contact_email' => '',
        'contact_phone' => '',
        'title'         => '',
        'order'         => 'required',
        'position'      => '',
        'language'      => '',
        'is_show'       => ''
    ];

}