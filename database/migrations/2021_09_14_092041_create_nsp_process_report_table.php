<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNspProcessReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsp_process_report', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->string('interventions', 1500)->nullable();
            $table->string('activities', 1500)->nullable();
            $table->string('indicators', 1500)->nullable();
            $table->string('target', 500)->nullable();
            $table->char('progress', 50)->nullable();
            $table->char('reason_for_deviation', 250)->nullable();
            $table->char('performance_status', 50)->nullable();
            $table->string('correction_measures', 1000)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nsp_process_report');
    }
}
