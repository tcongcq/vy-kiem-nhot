<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use InnoSoft\CMS\Account;

class ConfigHomepageController extends API
{   
    public function __construct() {
        $this->M = new Account();
        $this->view = 'admin.pages.config_homepages';
        $this->validator_msg = [];
    }
}

