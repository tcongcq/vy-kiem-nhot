<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\ContactInfo;

class ContactInfoController extends API
{   
    public function __construct() {
        $this->M = new ContactInfo();
        $this->view = 'admin.pages.contact_infos';
        $this->validator_msg = [];
    }
}

