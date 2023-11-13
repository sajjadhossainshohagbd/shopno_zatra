<?php

use App\Models\Settings;

/*

*********** Custom Helpers *********

*/


if(!function_exists('settings')){
    function settings($key){
        return Settings::where('key',$key)->first()?->value ?? '';
    }
}
