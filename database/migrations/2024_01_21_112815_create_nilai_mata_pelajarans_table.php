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
        Schema::create('nilai_mata_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->json('mata_pelajaran');
            $table->json('latihan_soal');
            $table->json('ulangan_harian');
            $table->decimal('ulangan_tengah_semester', 5, 2);
            $table->decimal('ulangan_semester', 5, 2);
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
        Schema::dropIfExists('nilai_mata_pelajarans');
    }
};
