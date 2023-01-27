<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('usia');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('gaji');
            $table->string('m_kerja');
            $table->string('s_kerja');
            $table->bigInteger('jabatan_id')->unsigned();
            $table->timestamps();
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
