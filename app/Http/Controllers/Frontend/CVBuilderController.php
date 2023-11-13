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

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->storeAs('cv',$imageName,[
                'disk' => 'local'
            ]);

            $imageUrl = asset('uploads/cv/'.$imageName);
        }

        return view('cv.first',['data' => $request,'imageUrl' => $imageUrl]);
    }
}
