<?php

namespace App\Models;

use App\Models\BankInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuyerPay extends Model
{
    use HasFactory;

    public function bank()
    {
        return $this->hasOne(BankInfo::class,'id','bank_id');
    }

    public function scopeOwn(Builder $query)
    {
        $query->where('user_id',auth()->id());
    }
}
