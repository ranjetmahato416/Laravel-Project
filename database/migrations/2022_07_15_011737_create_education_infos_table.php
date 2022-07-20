<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('board', 50);
            $table->unsignedBigInteger('student_id');
            $table->string('cgpa');
            $table->string('symbol_no', 15);
            $table->string('passed_year', 4);
            $table->string('institute_name', 255);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_infos');
    }
}
