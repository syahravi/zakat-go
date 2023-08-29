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
        Schema::create('muzaki', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('amount', 15, 2);
            $table->uuid('muzaki_id');
            $table->uuid('zakat_id');
            $table->foreign('muzaki_id')->references('id')->on('users');
            $table->foreign('zakat_id')->references('id')->on('zakat');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('muzakis');
    }
};
