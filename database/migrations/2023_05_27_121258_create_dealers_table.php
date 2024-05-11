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
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('dealership_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('work_email');
            $table->bigInteger('phone_no', 20);
            $table->string('state');
            $table->string('zip_code', 10);
            $table->text('used_inventory');
            $table->text('website');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealers');
    }
};
