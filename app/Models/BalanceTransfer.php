<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BalanceTransfer extends Model
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
        return $this->hasOne(BankInfo::class,'id','bank_id');
    }

    protected $casts = [
        'date_of_payment' => 'date'
    ];
}
