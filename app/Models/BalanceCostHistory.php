<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BalanceCostHistory extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->hasOne(Service::class,'id','service_id');
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
