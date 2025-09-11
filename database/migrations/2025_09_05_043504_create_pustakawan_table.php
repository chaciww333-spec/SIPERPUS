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
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->id();
            $table->string('Nama', 64)->unique();
            $table->string('Alamat', 255)->nullable();
            $table->string('Telepon', 32);
            $table->string('Jabatan', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pustakawan');
    }
};
