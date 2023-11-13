<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalOrder extends Model
{
    use HasFactory;

    public function medical()
    {
        return $this->hasOne(MedicalVisa::class,'id','medical_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

}
