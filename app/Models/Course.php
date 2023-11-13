<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    public function getVideoUrlAttribute()
    {

        $video_id = parse_url($this->video_link,PHP_URL_PATH);
        $url = 'https://player.vimeo.com/video'.$video_id;
        return $url;
    }

    public function category()
    {
        return $this->hasOne(CourseCategory::class,'id','course_category_id');
    }

    public function enrolls()
    {
        return $this->hasMany(CourseEnroll::class,'course_id','id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class,'course_id','id');
    }

    public function getShowThumbnailAttribute()
    {
        return asset($this->thumbnail);
    }

    public function scopePublish(Builder $query)
    {
        return $query->where('status','published');
    }

    use HasFactory;
}
