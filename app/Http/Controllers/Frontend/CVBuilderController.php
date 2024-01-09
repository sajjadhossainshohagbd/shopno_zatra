<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CvRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CVBuilderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.cv.cv-builder');
    }

    public function preview(Request $request)
    {
        $imageUrl = null;
        if($request->hasFile('picture')){
            $image = $request->file('picture');

            $imageName = $image->store('uploads/cv',[
                'disk' => 'public'
            ]);

            $imageUrl = asset($imageName);
        }

        return view('frontend.cv.one',['data' => $request,'imageUrl' => $imageUrl]);
    }

    public function specialCv()
    {
        return view('frontend.cv.special-cv');
    }

    public function specialCvOrder(Request $request)
    {
        // dd($request->all());
        $image = $request->file('picture');

        $imageName = $image->store('uploads/cv',[
            'disk' => 'public'
        ]);

        $paymentReceipt = $request->file('payment_receipt')->store('uploads/cv/payment_receipt',[
            'disk' => 'public'
        ]);

        $cv = new CvRequest();
        $cv->user_id = auth()->id();
        $cv->paymentReceipt = $paymentReceipt;
        $cv->cv_delivery_mail = $request->cv_delivery_email;
        $cv->name = $request->full_name;
        $cv->position = $request->position;
        $cv->about_yourself = $request->about_me;
        $cv->phone = $request->phone;
        $cv->email = $request->email;
        $cv->website_url = $request->website;
        $cv->linkedin_url = $request->linkedin_url;
        $cv->present_address = $request->present_address;
        $cv->education = json_encode($request->education);
        $cv->language = json_encode($request->language);
        $cv->experience = json_encode($request->experience);
        $cv->skill = json_encode($request->skills);
        $cv->picture = $imageName;
        $cv->status = 'pending';
        $cv->save();

        return to_route('special.cv')->with('success','Order created successfully!');
    }
}
