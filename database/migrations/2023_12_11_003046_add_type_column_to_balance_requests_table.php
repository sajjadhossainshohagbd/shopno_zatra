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
        Schema::table('balance_requests', function (Blueprint $table) {
            $table->enum('type',['balance','deposit'])
                    ->default('balance')
                    ->after('bank_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('balance_requests', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
