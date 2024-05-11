<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyNow extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'resume',
        'cover_letter',
        'linkedin_profile',
        'website',
        'work_authorization',
        'maintain_authorization',
        'gender',
        'transgender_identify',
        'lgbtqia_identify',
        'race_ethnicity',
        'veteran_status',
        'disability',
        'event_manually_resume',
        'event_manually_letter',
    ];

    public function Job()
    {
        return $this->hasOne(job::class,'id','job_id');
    }
}
