<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTalent extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'resume',
        'event_manually_resume',
        'event_manually_letter',
        'cover_letter',
        'department',
    ];
}
