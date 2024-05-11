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
        Schema::create('savelikes', function (Blueprint $table) {

            $table->id();

            $table->integer('like')->Default(0);
            $table->increments('id');
            $table->integer('post_id');
            $table->smallinteger('likes')->default(0);
            $table->smallinteger('dislikes')->default(0); ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savelikes');
    }
};
