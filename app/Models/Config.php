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

    public static function get_config($lang){
        $configs = self::where('language', $lang)
                    ->where('attrib', 'CONFIG')
                    ->get();
        $config = [];
        foreach ($configs as $key => $row) {
            $config[$row->code] = $row->value;
        }
        return $config;
    }
}