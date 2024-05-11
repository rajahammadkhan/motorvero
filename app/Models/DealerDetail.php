<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerDetail extends Model
{
    use HasFactory;


    protected $fillable = [
        'dealership_name',
        'first_name',
        'last_name',
        'state',
        'zip_code',
        'used_inventory',
        'website',
    ];
}
