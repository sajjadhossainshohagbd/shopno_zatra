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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('company_name');
            $table->text('company_address');
            $table->enum('gender',['male','female']);
            $table->text('district');
            $table->date('established_date');
            $table->string('logo');
            $table->string('trade_number');
            $table->string('nid_number');
            $table->string('tin_number');
            $table->string('trade_license');
            $table->string('tin');
            $table->string('nid_front')->nullable();
            $table->string('nid_back')->nullable();
            $table->enum('status',['pending','approved','rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
