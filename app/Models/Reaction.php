<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    public $table = "reactions";

    protected $fillable = [
        'user_id',
        'reference_type',
        'reference_id',
        'type',
        'comments',
        'image',
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function property()
    {
        return $this->belongsTo(Car::class, 'reference_id','id')->first();

    }
}
