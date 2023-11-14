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
        Schema::create('balance_cost_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('updated_by')->nullable();
            $table->text('service_id');
            $table->decimal('service_price');
            $table->text('reason')->nullable();
            $table->enum('payment_status',['unpaid','paid']);
            $table->enum('status',['pending','processing','approved','cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance_cost_histories');
    }
};
