<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencys_table', function (Blueprint $table) {
            $table->increments('emergency_id');
            $table->string('user_name',20);
            $table->string('mail',20);
            $table->string('check_name',2);
            $table->string('situation',100);
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
        Schema::dropIfExists('emergencys_tables');
    }
}
