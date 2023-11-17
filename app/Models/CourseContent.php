<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    public function getVideoUrlAttribute()
    {
        $url = generateVideoEmbedUrl($this->video_link);
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
