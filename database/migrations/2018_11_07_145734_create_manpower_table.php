<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManpowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manpower', function (Blueprint $table) {
            $table->increments('id');
            $table->char('external_Recruit',100)->nullable();
            $table->char('internal_Recruit',100)->nullable();
            $table->char('company',100)->nullable();
            $table->char('position_required',100)->nullable();
            $table->char('section',100)->nullable();
            $table->char('date_required',100)->nullable();
            $table->integer('number')->nullable();
            $table->integer('age')->nullable();
            $table->char('permanent',100)->nullable();
            $table->char('apprentie',100)->nullable();
            $table->char('subcontract',100)->nullable();
            $table->char('daily1',100)->nullable();
            $table->char('monthly2',100)->nullable();
            $table->char('daily3',100)->nullable();
            $table->char('monthly4',100)->nullable();
            $table->char('daily5',100)->nullable();
            $table->char('monthly6',100)->nullable();
            $table->char('checkstart1',100)->nullable();
            $table->char('timestart1',100)->nullable();
            $table->char('timeend1',100)->nullable();
            $table->char('checkstart2',100)->nullable();
            $table->char('timestart2',100)->nullable();
            $table->char('timeend2',100)->nullable();
            $table->char('hire',100)->nullable();
            $table->char('bec',100)->nullable();
            $table->char('substitute',100)->nullable();
            $table->char('name_substitute',100)->nullable();
            $table->char('ratesalary',100)->nullable();
            $table->string('benefits',300)->nullable();
            $table->string('description',300)->nullable();
            $table->char('gender',100)->nullable();
            $table->char('secondary',100)->nullable();
            $table->char('primary',100)->nullable();
            $table->char('high_school',100)->nullable();
            $table->char('vocational',100)->nullable();
            $table->char('high_vocational',100)->nullable();
            $table->char('undergraduate',100)->nullable();
            $table->char('other_education',100)->nullable();
            $table->char('foreign_languages',100)->nullable();
            $table->string('languages_name',100)->nullable();
            $table->char('typing',100)->nullable();
            $table->string('typing_name',100)->nullable();
            $table->char('computer_knowledge',100)->nullable();
            $table->string('knowledge_name',100)->nullable();
            $table->char('other_skill',100)->nullable();
            $table->string('other_skill_name',100)->nullable();
            $table->char('inexperience',100)->nullable();
            $table->string('inexperience_com',100)->nullable();
            $table->char('minimum_experience',100)->nullable();
            $table->string('minimum_experience_com',100)->nullable();
            $table->char('additional_experience',100)->nullable();
            $table->string('additional_com',100)->nullable();
            $table->char('other_experience',100)->nullable();
            $table->string('other_experience_com',100)->nullable();
            $table->longText('signa1_requested')->nullable();
            $table->longText('signa1_sup')->nullable();
            $table->longText('signa1_md')->nullable();
            $table->char('requested',100)->nullable();
            $table->tinyInteger('man_enable')->default('1');
            $table->tinyInteger('Sup_enable')->default('0');
            $table->tinyInteger('MD_enable')->default('0');
            $table->tinyInteger('Send_enable')->default('0');
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
        Schema::dropIfExists('manpower');
    }
}
