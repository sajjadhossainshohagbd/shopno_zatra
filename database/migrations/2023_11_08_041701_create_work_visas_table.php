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
        Schema::create('work_visas', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('country');
            $table->string('category');
            $table->longText('description');
            $table->longText('terms_condition');
            $table->text('thumbnail');
            $table->decimal('price');
            $table->string('process_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_visas');
    }
};
