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
        Schema::create('CategoryProduct', function (Blueprint $table) {
            $table->Increments('cate_id');
            $table->string('cate_name');
            $table->text('cate_desc');
            $table->integer('cate_status');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CategoryProduct');
    }
};
