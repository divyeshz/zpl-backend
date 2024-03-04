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
        Schema::create('users', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->enum('role', ['A', 'TC', 'TM', 'P'])->comment('Admin , TEAM CAPTAIN, TEAM MANAGER, PLAYER');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->enum('gender', ['M', 'F', 'O'])->comment('MALE , FEMALE, OTHER');
            $table->string('email', 128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('profile_image', 512)->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->char('created_by', 36)->nullable();
            $table->char('updated_by', 36)->nullable();
            $table->char('deleted_by', 36)->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->softDeletes(); // Adds deleted_at Datatype Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
