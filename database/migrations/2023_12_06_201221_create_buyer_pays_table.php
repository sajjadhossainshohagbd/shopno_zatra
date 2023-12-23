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
        Schema::create('buyer_pays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('bank_id');
            $table->decimal('amount');
            $table->string('voucher');
            $table->string('transaction_id');
            $table->enum('status',['pending','approved','cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer_pays');
    }
};
