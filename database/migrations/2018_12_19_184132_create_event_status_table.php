<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_status', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('event_id')->unsigned();
            $table->integer('status_id')->unsigned();

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_status');
    }
}
