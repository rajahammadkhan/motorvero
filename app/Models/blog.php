<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BlogPageCategory;


class blog extends Model
{

    use HasFactory;
    protected $appends = [
        'page_name'
    ];

    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'short_description',
        'long_description',
        'status',
        'admin_status',
        'type',
        'category',
        'written_by'
    ];

    public function getPageNameAttribute()
    {
        $pageName = [];
        $blogPageDetail = $this->blogCategoryPageDetail()->get()->each(function ($val) use (&$pageName){
            array_push($pageName , $val->page_name);
        });
        return $pageName;
    }



    public function media()
    {
        return $this->hasMany(media::class, 'reference_id')->where('reference_type', 'blog')->get()->first();
    }

    public function seo()
    {
        return $this->hasMany(seo::class, 'reference_id')->where('reference_type', 'blog')->get()->first();
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

    public function blogCategoryPageDetail()
    {

        return $this->hasMany(BlogPageCategory::class,'category_id','id');
    }

    public function articlePageCategory()
    {
        return $this->hasMany(BlogPageCategory::class,'category_id','id');
    }

}
