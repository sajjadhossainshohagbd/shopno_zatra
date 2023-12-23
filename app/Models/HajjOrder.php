<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HajjOrder extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }

    public function hajj()
    {
        return $this->hasOne(Hajj::class,'id','hajj_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

}
