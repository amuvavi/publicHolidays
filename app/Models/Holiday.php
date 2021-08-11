<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
}
