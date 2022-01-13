<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToBookingTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_tables', function (Blueprint $table) {
            $table->string('full_names');
            $table->string('email')->nullable();
            $table->string('user_id')->nullable();
            $table->string('contact');
            $table->integer('room_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_tables', function (Blueprint $table) {
            $table->dropColumn('full_names');
            $table->dropColumn('email')->nullable();
            $table->dropColumn('user_id')->nullable();
            $table->dropColumn('contact');
            $table->dropColumn('room_id');
        });
    }
}
