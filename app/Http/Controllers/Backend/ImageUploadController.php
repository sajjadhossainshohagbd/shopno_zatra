<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        $fileName = $request->file('file')->store('uploads/text-editor','public');

        $url = asset($fileName);

        return response()->json([
            'fileName' => $fileName,
            'uploaded'=> 1,
            'location' => $url
        ]);

    }
}
