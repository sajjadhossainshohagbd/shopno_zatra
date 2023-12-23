<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    protected $fillable = ['user_id'];
}
