<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('middle_name')->after('name')->nullable();
            $table->string('last_name')->after('middle_name')->nullable();
            $table->boolean('gender')->after('last_name')->nullable();
            $table->string('address')->after('gender')->nullable();
            $table->string('street')->after('address')->nullable();
            $table->string('city')->after('street')->nullable();
            $table->string('country')->after('city')->nullable();
            $table->string('zip')->after('country')->nullable();
            $table->string('phone')->after('email')->nullable();
            $table->date('dob')->after('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
