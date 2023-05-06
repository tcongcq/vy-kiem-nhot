<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactInfo;

class HomepageController extends Controller
{   
    public function __construct() {}

    public function getHomepage(){
    	return view('site.homepage.index');
    }

    public function getAboutUs(){
        return view('site.about-us.about-us-2');
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

    public function postContactUs(){
        try {
            Contact::create(\Request::all());
            return ['status'=>'success', 'message'=>'Cảm ơn thông tin của bạn. Chúng tôi sẽ liên hệ lại với bạn sớm nhất!'];
        } catch (Exception $e) {
            return ['status'=>'error', 'message'=>'Đã xãy ra lỗi trong quá trình xử lý', 'info'=>$e->getMessage()];
        }
    }

    public function changeLang(Request $request){
        \App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}

