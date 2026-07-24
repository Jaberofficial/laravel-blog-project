<?php

namespace App\Http\Controllers\Frontend\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function getBlogList ()
    {

    $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);

    return response()->json([
        'message' => 'Blog data fetch successfully',
        'data' => $blogs,
        'status' => true
    ]);
    }

    public function getBlogDetails($id)
    {
        $blog =Blog::find($id);
        return response()->json([
        'message' => 'Blog details fetch successfully',
        'data' => $blog,
        'status' => true
        ]);
    }

    public function getGeneralData()
    {
        $generalData = Setting::first();
        return response()->json([
        'message' => 'General Data fetch successfully',
        'data' => $generalData,
        'status' => true
        ]);
    }

    public function sendContactMessage(Request $request)
    {
        $validator = Validator::make($request->all(),[
'name' =>'required|max:255',
'email' =>'required|email',
'message' =>'required'

        ]);
        if($validator->fails()){
             return response()->json([
        'message' => 'Validation error!',
        'data' => $validator->errors(),
        'status' => false
        ], 422);

        }
        $message = new ContactMessage();
        
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();

         return response()->json([
        'message' => 'Message Sent successfully',
        'data' => $message,
        'status' => true
        ]);
    }

}
