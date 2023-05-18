<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCovid19ResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid-19_response', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->string('interventions', 1500);
            $table->string('activities', 1500);
            $table->char('progress', 20)->nullable();
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
        Schema::dropIfExists('covid-19_response');
    }
}
