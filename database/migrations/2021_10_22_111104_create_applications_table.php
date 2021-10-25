<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();        

            $table->string('title');
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername');
            $table->string('gender');
            $table->string('email');
            $table->string('telephone');
            $table->string('home_address');
            $table->string('farm_address');
            $table->string('lga');
            $table->string('city');
            $table->string('state');
            $table->string('bday');
            $table->string('interested_crop');
            $table->string('farming_initiative');
            $table->string('available_size');
            $table->string('kin_name');
            $table->string('kin_email');
            $table->string('kin_phone');
            $table->string('kin_relationship');
            $table->string('kin_occupation');
            $table->string('consent_approval');
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
        Schema::dropIfExists('applications');
    }
}
