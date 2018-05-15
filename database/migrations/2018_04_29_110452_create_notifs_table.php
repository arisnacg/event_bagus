<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifs', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->integer('user_id');
            $table->integer('type');
            $table->text('content')->nullable();
=======
            $table->integer('receiver_id');
            $table->integer('user_id')->nullable();
            $table->integer('event_id')->nullable();
            $table->integer('type');
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
            $table->boolean('status')->default('0');
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
        Schema::dropIfExists('notifs');
    }
}
