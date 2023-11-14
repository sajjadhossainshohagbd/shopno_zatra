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
        foreach ($request->settings as $key => $type) {
            $settings = Settings::where('key', $type)->first();

            if ($settings != null) {
                if (gettype($request[$type]) == 'array') {
                    $settings->value = json_encode($request[$type]);
                } else {
                    $settings->value = $request[$type];
                }
                $settings->save();
            } else {
                $settings = new Settings();
                $settings->key = $type;

                if (gettype($request[$type]) == 'array') {
                    $settings->value = json_encode($request[$type]);
                } else {
                    $settings->value = $request[$type];
                }
                $settings->save();
            }
        }

        Artisan::call('cache:clear');

        return back()->with('success', 'Settings updated successfully!');
    }
}
