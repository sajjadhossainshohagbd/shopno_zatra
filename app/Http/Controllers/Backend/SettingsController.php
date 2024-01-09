<?php

namespace App\Http\Controllers\Backend;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class SettingsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dd($request->all());
        foreach ($request->settings as $key => $type) {
            $settings = Settings::firstOrCreate([
                'key' => $type
            ]);

            if (gettype($request[$type]) == 'array' && !$request->hasFile($type)) {
                $settings->value = json_encode($request[$type]);
            }elseif($request->hasFile($type)){
                if(is_array($request->file($type))){
                    $values = is_array(json_decode(settings($type))) ? json_decode(settings($type)) : [];

                    foreach($request->file($type) as $key => $file){
                        $values[$key] = $file->store('uploads/site_settings','public');
                    }
                    $settings->value = json_encode($values);
                }else{
                    $settings->value =  $request->file($type)->store('uploads/site_settings','public');
                }
            } else {
                $settings->value = $request[$type] ?? $settings->value;
            }
            $settings->save();

        }

        Artisan::call('cache:clear');

        return back()->with('success', 'Settings updated successfully!');
    }
}
