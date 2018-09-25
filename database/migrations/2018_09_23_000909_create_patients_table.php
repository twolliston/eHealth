<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('active')->default(false);
            $table->string('firstname', 191);
            $table->string('middle', 191)->nullable();
            $table->string('lastname', 191);
            $table->string('address_1', 191);
            $table->string('address_2', 191);
            $table->integer('housenumber')->nullable();
            $table->string('postalcode');
            $table->string('city', 191);
            $table->string('state', 191);
            $table->string('county', 191);
            $table->string('phonenumber', 20)->nullable();
            $table->string('mobilenumber', 20)->nullable();
            $table->string('email', 191)->nullable();
            $table->year('birth_year')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('maritalstatus')->nullable();
            $table->text('my_history');
            $table->text('family_history');
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
        Schema::dropIfExists('patients');
    }
}
