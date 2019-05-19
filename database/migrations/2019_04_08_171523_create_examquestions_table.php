<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateexamquestionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('correct_answer');
            $table->text('answer_review');
            $table->string('marks');
            $table->integer('exam_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('exam_id')->references('id')->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('examquestions');
    }
}
