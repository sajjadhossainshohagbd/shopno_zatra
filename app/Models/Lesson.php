<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->hasOne(Course::class,'id','course_id');
    }

    public function contents()
    {
        return $this->hasMany(CourseContent::class,'lesson_id','id');
    }
}
