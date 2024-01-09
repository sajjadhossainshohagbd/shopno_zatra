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
        Schema::create('cv_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('cv_delivery_mail');
            $table->text('name');
            $table->text('position');
            $table->text('about_yourself');
            $table->text('picture');
            $table->text('phone');
            $table->text('email');
            $table->text('website_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('present_address');
            $table->json('education');
            $table->json('language');
            $table->json('experience');
            $table->json('skill');
            $table->text('payment_receipt')->nullable();
            $table->enum('payment_status',['unpaid','paid'])->default('unpaid');
            $table->enum('status',['pending','processing','completed','cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_requests');
    }
};
