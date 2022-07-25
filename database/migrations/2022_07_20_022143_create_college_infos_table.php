<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('student_id');
            $table->string('reg_no');
            $table->timestamps();

            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('CASCADE');
            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('CASCADE');
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
        Schema::dropIfExists('college_infos');
    }
}
