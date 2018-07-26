<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('course_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('group_id');
            $table->integer('teacher_id');
            $table->date('start_date'); 
            $table->date('end_date'); 
            $table->integer('accadamic_year');
            $table->char('semister',2);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('course_sessions');
    }
}
