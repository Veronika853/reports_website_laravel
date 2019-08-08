<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->text('progress')->nullable();
            $table->integer('participation_id')->nullable();
            $table->integer('mood_id')->nullable();
            $table->boolean('attendance')->nullable();
            $table->float('hw_result')->nullable();
            $table->timestamps();
        });


        Schema::table('reports', function($table) {
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
