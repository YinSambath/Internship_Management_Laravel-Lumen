<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('person_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('issue_date');
            $table->integer('student_id')->nullable();
            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('academic_year_id')->nullable();
            // $table->foreign('academic_year_id')->references('id')->on('academic_years')->onDelete('cascade');
            $table->integer('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            
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
        Schema::dropIfExists('internships');
    }
}
