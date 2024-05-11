<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpertReview extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = ['title','short_description','long_description','reviews_video','start_price','end_price','pros','cons','look_feel','technology','safety','form_function','cost','expert_description','look_and_feel_detail','performance','form_and_function_detail','technology_detail','safety_detail','cost_effectiveness','price_range_start','price_range_end','avg_price_range_start','avg_price_range_end','yoy_price_start','yoy_price_end','meta_title','meta_description','meta_keywords','status','type','category','written_by','user_id' , 'admin_status'];

}
