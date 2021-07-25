<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DompetMigration extends Migration
{

    public function up()
    {
        Schema::create('dompet', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dompet');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->integer('saldo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dompet');
    }
}
