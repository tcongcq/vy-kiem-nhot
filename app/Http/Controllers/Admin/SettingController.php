<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use InnoSoft\CMS\Account;

class SettingController extends API
{   
    public function __construct() {
        $this->M = new Account();
        $this->view = 'admin.pages.settings';
        $this->validator_msg = [];
    }

    protected function prepare_index(){
        return $this->M->where('id', '>', 1)->orderBy('begin_datetime', 'DESC');
    }

    public function getIndex(){
        return view($this->view, [
            'customers' => Customer::where('id', '>', 1)->get(),
        ]);
    }

    protected function prepare_add(){
        // if ($overlap)
        //     return ['status' => 'warning', 'message'=>'Lịch đặt đã bị trùng. Hãy kiểm tra lại.'];
        return ['status'=>'success'];
    }

    protected function callback_add($data){
        return $data;
    }

    protected function prepare_update(){
        // if ($overlap)
        //     return ['status' => 'warning', 'message'=>'Lịch đặt đã bị trùng. Hãy kiểm tra lại.'];
        return ['status'=>'success'];
    }

    protected function callback_index($data){
        // foreach ($data['rows'] as $row){
        //     $row->customer_info = Customer::find($row->customer_id);
        // }
        return $data;
    }
}

