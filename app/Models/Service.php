<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function getCategoryAttribute()
    {
        return ucwords(str_replace('_',' ',$this->type));
    }

    public function getShowThumbnailAttribute()
    {
        return asset($this->thumbnail);
    }

    public function scopeMedical(Builder $query)
    {
        $query->where('type','medical_visa');
    }

    public function scopeHoliday(Builder $query)
    {
        $query->where('type','holiday_package');
    }

    public function scopeEducation(Builder $query)
    {
        $query->where('type','education_visa');
    }

    public function scopeHajj(Builder $query)
    {
        $query->where('type','hajj_visa');
    }

    public function scopeWork(Builder $query)
    {
        $query->where('type','work_visa');
    }
}
