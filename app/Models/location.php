<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class location extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'address',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($location) {
            $location->slug = $location->createSlug($location->title);
            $location->save();
        });
    }

    private function createSlug($location)
    {
        $slug = Str::slug($location);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        if ($count > 0) {
            return "{$slug}-" . ($count + 1);
        }
        return $slug;
    }

}
