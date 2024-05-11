<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellCarMoreDetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $casts =[
      'detail'=>'json'
    ];
    protected $fillable = [
        'sell_car_log_id',
        'detail',
        'email'
        ];
}
