<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Contact;

class ContactUsController extends API
{   
    public function __construct() {
        $this->M = new Contact();
        $this->view = 'admin.pages.contact_us';
        $this->validator_msg = [];
    }
}

