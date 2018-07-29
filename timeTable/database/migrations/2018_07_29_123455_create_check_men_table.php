<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckMenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_men', function (Blueprint $table) {
            $table->increments('id');


            $table->dateTime('date_time');
            $table->string('event');
            $table->string('zone');
            $table->string('name_surname');
            $table->string('personal_number');


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
        Schema::dropIfExists('check_men');
    }
}
