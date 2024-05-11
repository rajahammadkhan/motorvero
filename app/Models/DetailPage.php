<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'user_id',
    ];
}
