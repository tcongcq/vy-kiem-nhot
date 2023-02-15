<?php

namespace App\Http\Controllers\Admin;

use InnoSoft\CMS\API;
use App\Models\Language;

class LanguageController extends API
{   
    public function __construct() {
        $this->M = new Language();
        $this->view = 'admin.pages.languages';
        $this->validator_msg = [];
    }
}

