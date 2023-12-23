<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyBankInfo extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }
}
