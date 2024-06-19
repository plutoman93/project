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
        Schema::create('notification_times', function (Blueprint $table) {
            $table->string('noti_time_id',5)->primary();
            $table->string('time_name',20);
            $table->string('time');
            $table->timestamp('created_by');
            $table->timestamp('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_times');
    }
};
