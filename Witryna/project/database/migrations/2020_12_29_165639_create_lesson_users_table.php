<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_users', function (Blueprint $table) {
            $table->id();

            //powiązanie z konkretną lekcją o konkretnym czasie
            $table->unsignedBigInteger('lesson_id')->default(1);
            $table->foreign('lesson_id')->references('id')->on('lesson_times');

            //powiązanie z danym użytkownikiem
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //pola do przechowywania obecności i plusów
            $table->boolean('presence');
            $table->integer('pluses');

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
        Schema::dropIfExists('lesson_users');
    }
}
