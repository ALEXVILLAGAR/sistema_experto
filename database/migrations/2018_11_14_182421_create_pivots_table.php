<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_disease')->unsigned();
            $table->integer('id_symptom')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_disease')->references('id')->on('diseases');
            $table->foreign('id_symptom')->references('id')->on('symptoms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivots');
    }
}
