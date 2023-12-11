<?php

namespace App\Http\Controllers\Website;

use stdClass;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class RuralNetWebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }

    public function insuranceSolution()
    {
        return view('website.pages.insurancesolution');
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function privacyPolicy()
    {
        return view('website.pages.privacypolicy');
    }

    public function sendMailNow(Request $request){
        $info = new stdClass();
        $info->fullname = $request->firstName;
        if(isset($request->middleName) && !empty($request->middleName)){
            $info->fullname = $info->fullname ." ".$request->middleName;
        }
        
        $info->fullname = $info->fullname ." ".$request->lastName;
        $info->mobileNumber = $request->mobileNumber;
        $info->organization = $request->organization;
        $info->reasonForContacting = $request->reasonForContacting;
        $info->email = $request->email;

        $sendTo = "support@ruralnet.ph";

        $contact = new ContactEmail($info);
        if(Mail::to($sendTo)->send($contact)) {
            $response = response()->json(['success' => 'Successfully sent'], 200);
            return $response->status();
        }else {
            $response = response()->json(['failed' => 'Something went wrong'], 201);
            return $response->status();
        }
        // return redirect()->to(URL::current());
        // return redirect()->route('thank_you');
    }
    
    public function thankYou()
    {
        return view('website.pages.thankyou');
    }
}
