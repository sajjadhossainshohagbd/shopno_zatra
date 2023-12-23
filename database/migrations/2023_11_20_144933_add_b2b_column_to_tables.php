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
        Schema::table('hajjs', function (Blueprint $table) {
            $table->decimal('b2b_price')->after('start_from');
        });

        Schema::table('work_visas', function (Blueprint $table) {
            $table->decimal('b2b_price')->after('price');
        });

        Schema::table('education_visas', function (Blueprint $table) {
            $table->decimal('b2b_price')->after('price');
        });

        Schema::table('medical_visas', function (Blueprint $table) {
            $table->decimal('b2b_price')->after('price');
        });

        Schema::table('holidays', function (Blueprint $table) {
            $table->decimal('b2b_price')->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hajjs', function (Blueprint $table) {
            $table->dropColumn('b2b_price');
        });

        Schema::table('work_visas', function (Blueprint $table) {
            $table->dropColumn('b2b_price');
        });

        Schema::table('education_visas', function (Blueprint $table) {
            $table->dropColumn('b2b_price');
        });

        Schema::table('medical_visas', function (Blueprint $table) {
            $table->dropColumn('b2b_price');
        });

        Schema::table('holidays', function (Blueprint $table) {
            $table->dropColumn('b2b_price');
        });
    }
};
