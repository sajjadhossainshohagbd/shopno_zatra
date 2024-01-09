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
        Schema::create('hotel_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id');
            $table->foreignId('user_id');
            $table->text('name');
            $table->text('phone');
            $table->text('address');
            $table->text('email')->nullable();
            $table->text('nid');
            $table->text('passport')->nullable();
            $table->text('reason')->nullable();
            $table->text('payment_receipt')->nullable();
            $table->decimal('price');
            $table->enum('payment_status',['unpaid','paid']);
            $table->enum('status',['pending','processing','approved','cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_orders');
    }
};
