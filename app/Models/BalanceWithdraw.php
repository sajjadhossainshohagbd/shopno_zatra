<?php

namespace App\Models;

use App\Models\MyBankInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BalanceWithdraw extends Model
{
    use HasFactory;

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function bank()
    {
        return $this->hasOne(MyBankInfo::class,'id','bank_id');
    }
}
