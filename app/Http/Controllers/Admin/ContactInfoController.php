<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Language;
use App\Models\ContactInfo;

class ContactInfoController extends API
{   
    public function __construct() {
        $this->M = new ContactInfo();
        $this->view = 'admin.pages.contact_infos';
        $this->validator_msg = [];
    }

    public function getIndex(){
        return view($this->view, [ 
            'languages' => Language::orderBy('default', 'DESC')
                            ->orderBy('id')
                            ->get()
            ]);
    }

    protected function prepare_index(){
        return $this->M->orderBy('language')->orderBy('order');
    }
}

