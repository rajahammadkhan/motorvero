<?php

namespace App\Models;
use App\Models\location;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    Protected $fillable = [
        'title',
        'slug',
        'description',
        'location',
        'category',
    ];

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
    private function createSlug($title)
    {
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

    public function locationName()
    {
        return $this->belongsTo(location::class, 'location');
    }
}
