<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class HomePageController extends Controller
{
    public function index(){
        return view("frontend.index");
    }
    public function aboutMe(){
        return view("frontend.about-me");
    }
    public function contactMe(){
        return view("frontend.contact-me");
    }

    public function storeContactMessage(Request $request){
        $message =  new ContactMessage();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        $message->save();

         toastr()->success('Message Send Successfully.');
        return redirect()->back();

    }
    public function blogDetails(){
        return view("frontend.blog-details");
    }
}
    
