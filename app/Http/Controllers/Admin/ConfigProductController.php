<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use InnoSoft\CMS\Account;

class ConfigProductController extends API
{   
    public function __construct() {
        $this->M = new Account();
        $this->view = 'admin.pages.config_products';
        $this->validator_msg = [];
    }
}

