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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nm_lengkap', 200)->required();
            $table->string('tmp_lahir', 100)->required();
            $table->date('tgl_lahir', 100)->required();
            $table->string('sekolah', 150)->required();
            $table->string('universitas', 150)->required();
            $table->string('jurusan', 100)->required();
            $table->string('fakultas', 100)->required();
            $table->string('alamat', 200)->required();
            $table->string('provinsi', 100)->required();
            $table->string('kabupaten', 100)->required();
            $table->string('kecamatan', 100)->required();
            $table->string('telepon', 100)->required();
            $table->string('gambar', 200)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
