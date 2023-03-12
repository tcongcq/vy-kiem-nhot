<?php

return [
    'navi' => [
        '' => [
            'dashboard' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\DashboardController'
            ],
        ],
        'post-management' => [
            'post' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\PostController'
            ],
            'post-category' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\PostCategoryController'
            ],
        ],
        'product-management' => [
            'product' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\ProductController'
            ],
            'product-category' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\ProductCategoryController'
            ],
        ],
        'contact-management' => [
            'contact-us' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\ContactUsController'
            ],
        ],
        'setting-management' => [
            'config-content' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\ConfigContentController'
            ],
            'setting' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\SettingController'
            ],
            'language' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\LanguageController'
            ],
            'contact-info' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\ContactInfoController'
            ],
        ],
        'account-management' => [
            'account' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\AccountController'
            ],
            'account-group' => [
                'icon' => 'glyphicon glyphicon-dashboard',
                'ctrl' => '\App\Http\Controllers\Admin\AccountGroupController'
            ],
        ],
    ]
];
