<?php

namespace App\Models;
use App\Models\User;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'dealer_id',
        'first_name',
        'last_name',
        'area',
        'email',
        'phone',
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
