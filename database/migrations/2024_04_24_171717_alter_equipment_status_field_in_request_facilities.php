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
        Schema::table('request_facilities', function (Blueprint $table) {
            $table->enum('equipmentStatus', ['lost', 'perfect','slightly damaged', 'damage', 'badly damage'])->nullable()->after('status')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request_facilities', function (Blueprint $table) {
            $table->enum('equipmentStatus', ['perfect','slightly damaged', 'damage', 'badly damage'])->nullable()->after('status')->change();
        });
    }
};
