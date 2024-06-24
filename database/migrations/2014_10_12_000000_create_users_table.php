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
            // $table->id();
            $table->string('user_id')->primary(); //Column ตามตาราง <--
            $table->string('username',255)->nullable();
            $table->foreignId('title_id')->nullable()->index();
            $table->string('first_name',20)->nullable();
            $table->string('last_name',20)->nullable();
            $table->string('department_id',5)->nullable();
            $table->string('phone')->nullable();
            // $table->string('photo',2048);
            $table->string('email')->unique();
            $table->foreignId('account_status_id')->nullable()->index();
            $table->foreignId('user_status_id')->index();
            $table->timestamp('created_by');
            $table->timestamp('updated_by');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
