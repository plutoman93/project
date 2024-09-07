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
        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('task_status_id')->default(1)->change(); //ตั้งค่า Default value ของ column ให้เท่่ากับ 1 เพื่อแก้ไข
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('task_status_id')->change();
        });
    }
};
