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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('phone')->nullable();
            $table->string('pic')->nullable();
            $table->string('address')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('organization_id')->nullable()->unique();
            $table->string('user_slug')->nullable()->unique();
            $table->enum('role',['admin','advisor','student'])->default('student');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
