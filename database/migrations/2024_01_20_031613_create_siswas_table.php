<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->decimal('nilai_latihan_soal', 5, 2)->default(0);
            $table->decimal('nilai_ulangan_harian', 5, 2)->default(0);
            $table->decimal('nilai_ulangan_tengah_semester', 5, 2)->default(0);
            $table->decimal('nilai_ulangan_semester', 5, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
