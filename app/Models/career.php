<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'cover_letter',
        'resume',
    ];
}
