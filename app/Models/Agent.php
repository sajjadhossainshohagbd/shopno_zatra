<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public function getLogoUrlAttribute()
    {
        return asset($this->logo);
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
