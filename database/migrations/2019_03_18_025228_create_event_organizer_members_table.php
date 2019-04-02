<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventOrganizerMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_organizer_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('event_organizer_id')->unsigned();
            $table->foreign('event_organizer_id')->references('id')->on('event_organizers');
            $table->string('member_name');
            $table->string('image');
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
        Schema::dropIfExists('event_organizer_members');
    }
}
