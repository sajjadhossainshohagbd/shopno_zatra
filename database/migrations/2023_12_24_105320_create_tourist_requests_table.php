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
        Schema::create('tourist_requests', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('name');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('phone');
            $table->string('email');
            $table->text('class');
            $table->text('address');
            $table->integer('total_passengers');
            $table->integer('adult');
            $table->integer('child');
            $table->text('city');
            $table->text('passport');
            $table->text('police_clearance');
            $table->text('nid');
            $table->text('profession');
            $table->enum('status',['pending','processing','approved','cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_requests');
    }
};
