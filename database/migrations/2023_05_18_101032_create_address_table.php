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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('address_lane');
            $table->string('alternate_lane')->nullable();
            $table->string('landmark');
            $table->integer('pin_code');
            $table->bigInteger('mobile_number');
            $table->string('address_type');
            $table->boolean('is_default')->default(false);
            $table->integer('alternate_number')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
