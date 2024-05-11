<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('make_id');
            $table->unsignedInteger('model_id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('vehicle_name');
            $table->string('vehicle_model')->nullable();
            $table->string('dollar_price')->nullable();
            $table->string('detail')->nullable();
            $table->string('location')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('mile_age')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('transmission')->nullable();
            $table->string('vehicle_condition')->nullable();
            $table->string('external_color')->nullable();
            $table->string('internal_color')->nullable();
            $table->string('vehicle_body')->nullable();
            $table->string('VIN')->nullable();
            $table->string('deal_type')->nullable();
            $table->string('title_check')->nullable();
            $table->string('accident_check')->nullable();
            $table->string('owner')->nullable();
            $table->integer('status')->default(0);
            $table->integer('admin_status')->default(0);
            $table->string('owner')->nullable();
            $table->foreign('make_id')->references('id')->on('makes')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
