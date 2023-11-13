<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseEnroll extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->hasOne(Course::class,'id','course_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }
}
