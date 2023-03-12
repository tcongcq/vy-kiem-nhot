<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Config;
use App\Models\Language;

class ConfigContentController extends API
{   
    public function __construct() {
        $this->M = new Config();
        $this->view = 'admin.pages.config_contents';
        $this->validator_msg = [];
    }

    public function getIndex(){
        return view($this->view, [ 
            'languages' => Language::orderBy('default', 'DESC')
                            ->orderBy('id')
                            ->get()
            ]);
    }

    public function getConfig(){
        try {
            $configs = $this->M->where(['language' => \Request::get('language')])->get();
            return ['status'=>'success', 'data'=>$configs];
        } catch (Exception $e) {
            return ['status'=>'errro', 'message'=>'There was an error during processing!'];
        }
    }

    public function postSaveConfig(){
        try {
            $results = [];
            $language = \Request::get('language');
            foreach (\Request::get('configs') as $key => $cf_val){
                if ($key == '_token')
                    continue;
                $has_config = $this->M->where(['code' => $key, 'language' => $language])->first();
                if (!empty($has_config)){
                    $this->M->where(['code' => $key, 'language' => $language])
                            ->update([
                                'value'     => $cf_val ? $cf_val : ''
                            ]);
                } else {
                    $this->M->create([
                        'code'    => $key,
                        'attrib'  => 'CONFIG',
                        'value'   => ($cf_val ? $cf_val : ''),
                        'language'=> $language
                    ]);
                }
            }
            return ['status'=>'success', 'message'=>'Update successfully!'];
        } catch (Exception $e) {
            return ['status'=>'error', 'message'=>$e->getMessage()];
        }
    }
}

