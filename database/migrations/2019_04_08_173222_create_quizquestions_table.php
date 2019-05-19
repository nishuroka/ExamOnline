<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatequizquestionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('correct_answer');
            $table->text('answer_review');
            $table->integer('subject_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('quizquestions');
    }
}
