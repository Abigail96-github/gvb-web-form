<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_information', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->date('reporting_period');
            $table->char('m&e_contact_person_firstname', 50);
            $table->char('m&e_contact_person_lastname', 100);
            $table->char('m&e_contact_person_email', 150);
            $table->char('m&e_contact_person_phone', 50);
            $table->char('lead_contact_person_firstname', 50)->nullable();
            $table->char('lead_contact_person_lastname', 100)->nullable();
            $table->char('lead_contact_person_email', 100)->nullable();
            $table->char('lead_contact_person_phone', 50)->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('accounting_information');
    }
}
