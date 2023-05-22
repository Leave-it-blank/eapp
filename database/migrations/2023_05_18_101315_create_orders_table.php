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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('pick_up_date')->nullable();
            $table->time('pick_up_time')->nullable();
            $table->boolean('full_filled')->nullable();
            $table->boolean('waiting')->nullable();
            $table->integer('pin_code')->nullable();
            $table->date('expected_eta')->nullable();
            $table->string('vendor')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('address_id')->references('id')->on('address')->cascadeOnUpdate()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
