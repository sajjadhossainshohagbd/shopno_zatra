<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkOrder extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }

    public function work()
    {
        return $this->hasOne(WorkVisa::class,'id','work_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
