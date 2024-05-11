<?php

namespace App\Models;

use App\Models\Make;
use App\Models\User;
use App\Models\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'dealer_type',
        'title',
        'slug',
        'make_id',
        'model_id',
        'model_year',
        'dollar_price',
        'original_price',
        'prices',
        'details',
        'location',
        'zip_code',
        'contact_no',
        'email',
        'mile_age',
        'engine_capacity',
        'fuel_type',
        'vehicle_type',
        'transmission',
        'vehicle_condition',
        'external_color',
        'internal_color',
        'vehicle_body',
        'VIN',
        'deal_type',
        'title_check',
        'accident_check',
        'owner',
        'status',
        'certified',
        'admin_status',
    ];

    public function makersName()
    {
        return $this->belongsTo(Make::class,'make_id');
    }

    public function modelsName()
    {
        return $this->belongsTo(Models::class,'model_id');
    }

    public function User()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function media()
    {
        return $this->hasMany(media::class, 'reference_id')->where('reference_type', 'car')->get();
    }
    public function featuredImage()
    {
        return $this->hasOne(media::class, 'reference_id')->where('reference_type', 'car')->first();
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            $product->slug = $product->createSlug($product->title);
            $product->save();
        });
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    private function createSlug($title){
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }


}
