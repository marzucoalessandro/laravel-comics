<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_details', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->text('description');
            $table->string('designer');
            $table->string('writer');
            $table->date('data_publ');
            $table->string('vol_numb');
            $table->string('size');
            $table->integer('page');
            $table->string('rated');
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
        Schema::dropIfExists('comic_details');
    }
}
