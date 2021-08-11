<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Holiday extends Model
{
    use HasFactory;

    public $fillable = ['name','date','holidayType'];

    protected $dates = ['date'];

    public static function booted()
    {
        static::creating(function ($model){
            $model->uuid = Str::uuid();
        });
    }

    public function getHolidayTypeAttribute($value)
    {
        return ucwords(str_replace("_"," ",$value));
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('D, d M Y');
    }
 

}
