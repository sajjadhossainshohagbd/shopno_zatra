<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelOrder extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }

    public function hotel()
    {
        return $this->hasOne(Hotel::class,'id','hotel_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
