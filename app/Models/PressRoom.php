<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class PressRoom extends Model
{
    use HasFactory;
    use SoftDeletes;

    const PRESS_RELEASE = 1;
    const PRESS_COVERAGE = 2;
    const INSIGHT = 3;





    protected $fillable = [
      'user_id',
      'title',
      'short_description',
      'long_description',
      'status',
      'admin_status',
      'type',
      'category',
        'admin_status'
    ];

    public function media()
    {
        return $this->hasMany(media::class, 'reference_id')->where('reference_type', 'pressRoom')->get()->first();
    }

    public function seo()
    {
        return $this->hasMany(seo::class, 'reference_id')->where('reference_type', 'pressRoom')->get()->first();
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
