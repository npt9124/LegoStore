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
        Schema::create('Admin_table', function (Blueprint $table) {
            $table->Increments('ad_id');
            $table->string('username',250);
            $table->string('fullname',250);
            $table->string('ad_pass',250);
            $table->string('ad_level',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Admin_table');
    }
};
