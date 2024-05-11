<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellCarLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_car_logs', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('license_plate_number')->nullable();
            $table->string('state')->nullable();
            $table->string('vin_number')->nullable();
            $table->text('response')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell_car_logs');
    }
}
