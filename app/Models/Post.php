<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getShowThumbnailAttribute()
    {
        return asset($this->thumbnail);
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
