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
        Schema::create('users_details', function (Blueprint $table) {
            $table->id();
            $table->char('user_id', 36);
            $table->string('address')->nullable();
            $table->string('jersey_number', 5);
            $table->decimal('base_price', 10, 2)->default(100000.00);
            $table->enum('player_type', ['BA', 'BO', 'ALL'])->comment('batsman, bowler, all-rounder');
            $table->tinyInteger('batting_skills')->nullable()->comment('Rate your batting skills Out of 5');
            $table->tinyInteger('bowling_skills')->nullable()->comment('Rate your bowling skills Out of 5');
            $table->enum('played_frequency', ['R', 'W', 'M', 'Y'])->comment('Regularly, A week ago, A month ago, A year ago ');
            $table->string('profile_link', 150)->nullable()->comment('Crickheroes Profile Link');

            $table->char('created_by', 36)->nullable();
            $table->char('updated_by', 36)->nullable();
            $table->char('deleted_by', 36)->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->softDeletes(); // Adds deleted_at Datatype Timestamps


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_details');
    }
};
