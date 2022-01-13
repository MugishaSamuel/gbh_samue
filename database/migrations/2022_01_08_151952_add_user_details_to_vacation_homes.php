<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDetailsToVacationHomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacation_homes', function (Blueprint $table) {
            $table->string('property_name');
            $table->mediumText('property_description');
            $table->string('price');
            $table->string('status');
            $table->string('image');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacation_homes', function (Blueprint $table) {
            $table->dropColumn('property_name');
            $table->dropColumn('property_description');
            $table->dropColumn('price');
            $table->dropColumn('status');
            $table->dropColumn('image');
            $table->dropColumn('user_id');
        });
    }
}
