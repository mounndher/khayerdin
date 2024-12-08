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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
           
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('area')->nullable();
            $table->string('type');
            $table->string('status');
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('minimum_price', 15, 2)->nullable();
            $table->decimal('selling_price', 15, 2)->nullable();
            $table->boolean('price_negotiable')->default(false);
            $table->integer('number_of_rooms')->nullable();
            $table->integer('number_of_floors')->nullable();
            $table->integer('which_floor')->nullable();
            $table->boolean('furnished')->default(false);
            $table->boolean('garage')->default(false);
            $table->boolean('garden')->default(false);
            $table->boolean('pool')->default(false);
            $table->boolean('electricity')->default(false);
            $table->boolean('gas')->default(false);
            $table->date('date_of_construction')->nullable();
            $table->string('act_type')->nullable();
            
            $table->boolean('elevator')->default(false);
            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->text('images')->nullable(); // For storing image paths as JSON
            $table->text('files')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
