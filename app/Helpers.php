<?php

use App\Models\Settings;

/*

***********
                    Custom Helpers
*********

*/


if(!function_exists('settings')) {
    function settings($key)
    {
        return Settings::where('key', $key)->first()?->value ?? '';
    }
}
if(!function_exists('generateVideoEmbedUrl')) {
    function generateVideoEmbedUrl($url)
    {
        //This is a general function for generating an embed link of an FB/Vimeo/Youtube Video.
        $finalUrl = '';

        if(strpos($url, 'facebook.com/') !== false) {
            //it is FB video
            $finalUrl.='https://www.facebook.com/plugins/video.php?href='.rawurlencode($url).'&show_text=1&width=200';
        } elseif(strpos($url, 'vimeo.com/') !== false) {
            //it is Vimeo video
            $videoId = explode("vimeo.com/", $url)[1];
            if(strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl.='https://player.vimeo.com/video/'.$videoId;
        } elseif(strpos($url, 'youtube.com/') !== false) {
            //it is Youtube video
            $videoId = explode("v=", $url)[1];
            if(strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl.='https://www.youtube.com/embed/'.$videoId;
        } elseif(strpos($url, 'youtu.be/') !== false) {
            //it is Youtube video
            $videoId = explode("youtu.be/", $url)[1];
            if(strpos($videoId, '&') !== false) {
                $videoId = explode("&", $videoId)[0];
            }
            $finalUrl.='https://www.youtube.com/embed/'.$videoId;
        }
        return $finalUrl;

    }
}
