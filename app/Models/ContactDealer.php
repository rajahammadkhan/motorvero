<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDealer extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'dealer_id',
        'first_name',
        'last_name',
        'about_car',
        'zip',
        'email',
        'phone',
        'comments',
        'email_me',
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
