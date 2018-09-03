<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('users');

            $table->text('last_message')->nullable();
            $table->dateTime('las_time')->nullable();
            $table->boolean('listen_notificacion')->default(true);
            $table->boolean('has_blocked')->default(false);

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
        Schema::dropIfExists('conversaciones');
    }
}
