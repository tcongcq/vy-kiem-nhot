<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;

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
        $lang = \App::getLocale();
        $contact_infos = ContactInfo::where('language', $lang)
                                    ->orderBy('order')
                                    ->get();
        return view('site.contact-us.contact-us', [
            'contact_infos' => $contact_infos
        ]);
    }

    public function changeLang(Request $request){
        \App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}

