<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('scholarship_id')->references('id')->on('scholarships')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('nickname');
            $table->string('gender');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('telephone');
            $table->string('email');
            $table->string('idType');
            $table->string('idNumber');
            $table->longText('addressID');
            $table->string('postCodeID');
            $table->string('districtID');
            $table->string('cityID');
            $table->string('provinceID');
            $table->longText('addressLiving');
            $table->string('postCodeLiving');
            $table->string('districtLiving');
            $table->string('cityLiving');
            $table->string('provinceLiving');
            $table->string('entrance');
            $table->string('entranceNumber');
            $table->string('major');
            $table->string('university');
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
        Schema::dropIfExists('biodatas');
    }
}
