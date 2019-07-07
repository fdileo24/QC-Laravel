<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamequestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamequestions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('question',300);
            $table->string('answer_1',100);
            $table->string('answer_2',100);
            $table->integer('correct_answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamequestions');
    }
}
