<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Config;

class ConfigContentController extends API
{   
    public function __construct() {
        $this->M = new Config();
        $this->view = 'admin.pages.config_contents';
        $this->validator_msg = [];
    }
}

