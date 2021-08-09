<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('address');
            $table->string('phone');
            $table->string('h_p');
            $table->string('e_mail');
            $table->string('web');
            $table->string('title');
            $table->string('training_field');
            // $table->bigIncrements('internship_id')->nullable();
            // $table->foreign('intership_id')->references('interships')->on('id')->onDelete('cascat');
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
        Schema::dropIfExists('companies');
    }
}
