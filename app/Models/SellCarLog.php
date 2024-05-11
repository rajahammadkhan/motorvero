<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SellCarMoreDetail;

class SellCarLog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='sell_car_logs';
    protected $fillable = [
        'type',
        'license_plate_number',
        'state',
        'vin_number',
        'response',
        //'created_by'
    ];

    public function moreDetails()
    {
        return $this->hasOne(SellCarMoreDetail::class,'sell_car_log_id','id');
    }
}
