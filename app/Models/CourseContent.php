<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    public function getVideoUrlAttribute()
    {

        $video_id = parse_url($this->video_link,PHP_URL_PATH);
        $url = 'https://player.vimeo.com/video'.$video_id;
        return $url;
    }

    public function course()
    {
        return $this->hasOne(Course::class,'id','course_id');
    }
    public function lesson()
    {
        return $this->hasOne(Lesson::class,'id','lesson_id');
    }
}
