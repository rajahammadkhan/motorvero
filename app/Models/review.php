<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class review extends Model
{
    use HasFactory,SoftDeletes;
    const TYPE = [
        '1'=>'CAR',
        '2'=>'DEALER'
    ];

    protected $fillable = [
        'car_id',
        'dealer_id',
        'rating',
        'name',
        'email',
        'comment',
        'reviews_status',
        'testimonial_id',
        'type',
        'deleted_by'
    ];

    public function CarName()
    {
        return $this->hasOne(Car::class,'id','car_id');
    }

    public function DealerName()
    {
        return $this->hasOne(User::class,'id','dealer_id');
    }
}
