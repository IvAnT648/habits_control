<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('value')
                ->unsigned()
                ->default(0);
            $table->integer('target_id')
                ->unsigned();
            $table->integer('user_id')
                ->unsigned();
            $table->date('mark_date');
            $table->timestamps();

            $table->foreign('target_id')->references('id')->on('targets');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
