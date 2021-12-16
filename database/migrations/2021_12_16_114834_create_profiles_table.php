<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('scholarship_id')->references('id')->on('scholarships')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('nik');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->text('address');
            $table->string('postalCode');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->string('phoneNumber');
            $table->string('telephone')->nullable();
            $table->string('bank')->nullable();
            $table->string('bankNumber')->nullable();
            $table->string('university');
            $table->string('major');
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
        Schema::dropIfExists('profiles');
    }
}
