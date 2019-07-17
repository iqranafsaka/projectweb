<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskusis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('slug');
            $table->text('konten');
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kategori');
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
        Schema::dropIfExists('diskusis');
    }
}
