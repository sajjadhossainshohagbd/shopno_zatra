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
        Schema::create('medical_visa_requests', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->text('name');
            $table->text('father_name');
            $table->text('mother_name');
            $table->text('email');
            $table->string('phone');
            $table->text('nid')->nullable();
            $table->text('passport')->nullable();
            $table->text('previous_report')->nullable();
            $table->text('guardian_nid')->nullable();
            $table->text('type_of_disease');
            $table->text('preferred_hospital')->nullable();
            $table->enum('status',['pending','processing','approved','cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_visa_requests');
    }
};
