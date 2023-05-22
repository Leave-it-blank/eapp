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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->enum('type', ['small', 'medium', 'large']);
            $table->integer('weight');
            $table->integer('quantity');
            $table->enum('condition', ['working', 'partially', 'not working']);
            $table->enum('age_of_item', ['less than one', 'greater than one', 'greater than two', 'greater than three']);
            $table->string('brand');
            $table->string('model');
            $table->enum('reason_for_selling', ['upgrade', 'not in use', 'broken','other']);
            $table->enum('mode_of_disposal', ['recycle', 'donation', 'other']);
            $table->string('comment');
            $table->string('file_path')->nullable();
            $table->foreignId('order_id')->references('id')->on('orders')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
