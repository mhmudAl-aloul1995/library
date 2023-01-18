<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cus_id');
            $table->boolean('cus_gender');
            $table->string('cus_phone');
            $table->string('cus_ar_first_name');
            $table->string('cus_ar_second_name');
            $table->string('cus_ar_third_name');
            $table->string('cus_ar_fourth_name');
            $table->string('cus_en_first_name');
            $table->string('cus_en_second_name');
            $table->string('cus_en_third_name');
            $table->string('cus_en_fourth_name');
            $table->date('cus_birth_date');
            $table->string('cus_birth_place');
            $table->string('cus_address');
            $table->string('cus_wife_name');
            $table->string('cus_wife_id');
            $table->string('cus_mother_name');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
