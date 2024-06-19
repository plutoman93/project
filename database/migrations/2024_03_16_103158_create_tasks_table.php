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
        Schema::create('tasks', function (Blueprint $table) {
            $table->string('task_id')->primary();
            $table->string('task_name',20);
            $table->string('task_detail',100);
            $table->string('start_date');
            $table->string('due_date');
            $table->string('file',2048)->nullable();
            $table->foreignId('status_task_id')->index();
            $table->foreignId('type_id')->index();
            $table->foreignId('user_id')->index();
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
        Schema::dropIfExists('tasks');
    }
};
