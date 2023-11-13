<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCart extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->with('course')->has('course')->where('user_id',auth()->id());
    }

    public function course()
    {
        return $this->hasOne(Course::class,'id','course_id');
    }
}
