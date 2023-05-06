<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function () {
    Route::group([ 'prefix' => 'admin' ], function(){
        Route::resource('filemanager', '\InnoSoft\FileManager\FileManagerController');
        Route::group(['prefix' => 'filemanager'], function() {
            Route::post('create-dir', '\InnoSoft\FileManager\FileManagerController@postCreateDir');
            Route::post('rename', '\InnoSoft\FileManager\FileManagerController@postRename');
            Route::post('upload', '\InnoSoft\FileManager\FileManagerController@postUpload');
            Route::post('save-photo-editor', '\InnoSoft\FileManager\FileManagerController@postSavePhotoEditor');
            Route::post('delete', '\InnoSoft\FileManager\FileManagerController@postDelete');
        });
        Route::any('{paths?}', "\InnoSoft\CMS\CMSController@route")->where('paths', '([A-Za-z0-9\-\/]+)');
    });

    Route::get('/', '\App\Http\Controllers\Site\HomepageController@getHomepage')->name('site.homepage');
    Route::get('/about-us', '\App\Http\Controllers\Site\HomepageController@getAboutUs')->name('site.about-us');
    Route::get('/contact-us', '\App\Http\Controllers\Site\HomepageController@getContactUs')->name('site.contact-us');
    Route::post('/contact-us', '\App\Http\Controllers\Site\HomepageController@postContactUs')->name('site.post-contact-us');
    Route::get('/news', '\App\Http\Controllers\Site\PostController@getNews')->name('site.news');
    Route::get('/news/{alias}', '\App\Http\Controllers\Site\PostController@getPostDetail')->name('site.post-detail');
    Route::get('/category/{alias}', '\App\Http\Controllers\Site\PostController@getCategoryDetail')->name('site.category-detail');
    Route::get('/products', '\App\Http\Controllers\Site\ProductController@getProducts')->name('site.products');
    Route::get('/products/{alias}', '\App\Http\Controllers\Site\ProductController@getProductDetail')->name('site.product-detail');
    Route::get('/product-category/{alias}', '\App\Http\Controllers\Site\ProductController@getCategoryDetail')->name('site.product-category-detail');


    Route::get('lang/change', '\App\Http\Controllers\Site\HomepageController@changeLang')->name('changeLang');
});
