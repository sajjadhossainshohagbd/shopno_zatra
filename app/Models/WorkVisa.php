<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkVisa extends Model
{
    use HasFactory;

    public function getShowThumbnailAttribute()
    {
        return asset($this->thumbnail);
    }
}
