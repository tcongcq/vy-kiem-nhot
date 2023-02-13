<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class HomepageController extends Controller
{   
    public function __construct() {}

    public function getHomepage(){
    	return view('site.homepage.index');
    }

    public function getAboutUs(){
        return view('site.about-us.about-us');
    }

    public function getContactUs(){
        return view('site.contact-us.contact-us');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * ref: https://www.itsolutionstuff.com/post/how-to-create-multilingual-website-in-laravelexample.html
    */
    public function changeLang(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}

