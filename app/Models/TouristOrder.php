<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TouristOrder extends Model
{
    use HasFactory;
    use Notifiable;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }

    public function tourist()
    {
        return $this->hasOne(Tourist::class,'id','tourist_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
