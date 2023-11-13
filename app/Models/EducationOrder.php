<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationOrder extends Model
{
    use HasFactory;

    public function education()
    {
        return $this->hasOne(EducationVisa::class,'id','education_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
