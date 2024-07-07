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
        Schema::create('ordered', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('lego_name');
            $table->integer('price');
            $table->text('lego_image');
            $table->integer('quantity');
            $table->integer('into_money');
            $table->string('status');
            $table->date('time_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordered');
    }
};
