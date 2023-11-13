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
        Schema::create('hajjs', function (Blueprint $table) {
            $table->id();
            $table->text('thumbnail');
            $table->text('package_name');
            $table->enum('type',['hajj','umrah']);
            $table->longText('description');
            $table->longText('terms_condition');
            $table->decimal('start_from');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajjs');
    }
};
