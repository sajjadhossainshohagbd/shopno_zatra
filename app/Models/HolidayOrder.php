<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HolidayOrder extends Model
{
    use HasFactory;

    public function holiday()
    {
        return $this->hasOne(Holiday::class,'id','holiday_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
