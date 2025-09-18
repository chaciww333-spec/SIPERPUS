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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 64)->unique();
            $table->string('nama', 255);
            $table->string('kelas', 64);
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L');
            $table->string('nomor_telepon');
            $table->date('tanggal_bergabung')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
