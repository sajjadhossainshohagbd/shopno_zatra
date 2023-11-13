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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('slug');
            $table->foreignId('course_category_id');
            $table->text('thumbnail');
            $table->string('duration');
            $table->string('level');
            $table->text('short_description');
            $table->longText('description');
            $table->text('tags');
            $table->decimal('price')->default(0.00);
            $table->string('video_source');
            $table->longText('video_link');
            $table->boolean('downloadable');
            $table->text('meta_title');
            $table->longText('meta_description');
            $table->enum('status',['draft','published']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
