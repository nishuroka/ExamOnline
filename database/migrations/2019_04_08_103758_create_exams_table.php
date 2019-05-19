<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateexamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ask_randomly');
            $table->integer('subject_id')->unsigned();
            $table->string('exam_code');
            $table->string('exam_name');
            $table->text('exam_date');
            $table->text('start_time');
            $table->string('exam_duration');
            $table->string('total_marks');
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
        Schema::drop('exams');
    }
}
