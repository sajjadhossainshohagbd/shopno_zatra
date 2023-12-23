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
        Schema::create('my_bank_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('name');
            $table->text('account_name');
            $table->string('account_number');
            $table->string('routing_number');
            $table->enum('account_type',['business','personal']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_bank_infos');
    }
};
