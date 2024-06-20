<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrationsss.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->string('account_status_id',5)->primary();
            $table->string('account_status_name',20);
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
        Schema::dropIfExists('accounts');
    }
};
