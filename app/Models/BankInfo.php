<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    use HasFactory;

    public function getTypeAttribute()
    {
        return ucwords(str_replace('_',' ',$this->account_type));
    }

    protected $fillable = [
        'country',
        'bank_name',
        'bank_address',
        'account_name',
        'account_number',
        'routing_number',
        'account_type'
    ];
}
