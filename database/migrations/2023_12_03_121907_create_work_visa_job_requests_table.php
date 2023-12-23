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
        Schema::create('work_visa_job_requests', function (Blueprint $table) {
            $table->id();
            $table->text('country');
            $table->text('name');
            $table->text('father_name');
            $table->text('mother_name');
            $table->integer('age');
            $table->text('email');
            $table->string('phone');
            $table->text('skills')->nullable();
            $table->text('nid')->nullable();
            $table->text('passport')->nullable();
            $table->text('present_address');
            $table->text('permanent_address');
            $table->text('education')->nullable();
            $table->text('choice_jobs');
            $table->enum('status',['pending','processing','approved','cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_visa_job_requests');
    }
};
