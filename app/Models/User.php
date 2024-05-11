<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    const Pending =2;
    const Approved = 3;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'email',
        'dealer_type',
        'phone_number',
        'image',
        'user_type',
        'password',
        'map_link',
        'website_link',
        'monday_opening_hour',
        'monday_closing_hour',
        'tuesday_opening_hour',
        'tuesday_closing_hour',
        'wednesday_opening_hour',
        'wednesday_closing_hour',
        'thursday_opening_hour',
        'thursday_closing_hour',
        'friday_opening_hour',
        'friday_closing_hour',
        'saturday_opening_hour',
        'saturday_closing_hour',
        'sunday_opening_hour',
        'sunday_closing_hour',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            $product->slug = $product->createSlug($product->name);
            $product->save();
        });
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    private function createSlug($name){
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reactions($referencetype,$reactiontype)
    {
        return $this->hasMany(Reaction::class, 'user_id')
            ->where('reference_type', $referencetype)
            ->where('type', $reactiontype)->get();
    }
    public function searches()
    {
        return $this->hasMany(Searches::class, 'user_id')->get();
    }
}
