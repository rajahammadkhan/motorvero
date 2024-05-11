<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreQualified extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'confirm_email',
        'phone_number',
        'home_address',
        'app_unit',
        'city',
        'state',
        'zip_code',
        'duration',
        'month',
        'property_type',
        'monthly_pay',
        'employment_status',
        'employer',
        'job_title',
        'duration_of_residence',
        'month_of_residence',
        'primary_income',
        'social_security',
        'date_of_birth',
        'agreed',
        'term_condition',
    ];
}
