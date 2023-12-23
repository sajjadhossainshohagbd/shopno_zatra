<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EducationOrder extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }

    public function education()
    {
        return $this->hasOne(EducationVisa::class,'id','education_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
