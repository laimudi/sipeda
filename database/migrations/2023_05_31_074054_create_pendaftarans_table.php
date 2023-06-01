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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nm_lengkap', 200)->required();
            $table->string('gender', 100)->required();
            $table->string('tmp_lahir', 100)->required();
            $table->date('tgl_lahir', 100)->required();
            $table->string('agama', 100)->required();
            $table->string('alamat', 200)->required();
            $table->string('penyakit', 100)->required();
            $table->string('telepon_ortu', 100)->required();
            $table->string('gambar', 200)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
