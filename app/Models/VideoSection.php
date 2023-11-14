<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    use HasFactory;

    public function getVideoUrlAttribute()
    {
        $url = generateVideoEmbedUrl($this->url);

        return $url;
    }
}
