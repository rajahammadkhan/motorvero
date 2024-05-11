<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory,SoftDeletes;

    const Active = '1';
    const Close = '2';
    protected $fillable =[
        'title',
        'description',
        'start_datetime',
        'end_datetime',
        'status',
        'created_by',
        'register_url'
    ];

    public function media()
    {
        return $this->hasMany(media::class, 'reference_id')->where('reference_type', 'event')->get()->first();
    }
}
