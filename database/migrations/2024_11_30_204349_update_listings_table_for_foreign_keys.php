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
        //
        Schema::table('listings', function (Blueprint $table) {
            // Replace string columns with foreign keys
            $table->dropColumn('state');
            $table->dropColumn('city');

            $table->unsignedBigInteger('state_id')->nullable()->after('country');
            $table->unsignedBigInteger('city_id')->nullable()->after('state_id');

            // Add foreign keys
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('listings', function (Blueprint $table) {
            // Drop foreign keys and revert back to strings
            $table->dropForeign(['state_id']);
            $table->dropForeign(['city_id']);
            $table->dropColumn('state_id');
            $table->dropColumn('city_id');

            $table->string('state')->after('country');
            $table->string('city')->after('state');
        });
       }
};
