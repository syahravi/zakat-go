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
        Schema::create('zakat', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('description');
            $table->decimal('amount', 15, 2);
            $table->uuid('thumbnail_id');
            $table->uuid('type_id');
            $table->uuid('partner_id');
            $table->foreign('thumbnail_id')->references('id')->on('files');
            $table->foreign('type_id')->references('id')->on('zakat_categories');
            $table->foreign('partner_id')->references('id')->on('users');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakats');
    }
};
