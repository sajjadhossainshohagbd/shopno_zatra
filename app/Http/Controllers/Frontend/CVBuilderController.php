<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CVBuilderController extends Controller
{
    public function index()
    {
        return view('frontend.cv-builder');
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
        // dd($imageUrl);
        // dd($request->all());

        return view('frontend.cv.one',['data' => $request,'imageUrl' => $imageUrl]);
    }
}
