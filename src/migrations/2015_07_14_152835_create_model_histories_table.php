<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body')->nullable();
            $table->string('remark')->nullable();
            $table->morphs('historiable');
            $table->timestamp('date', $precision = 0)->useCurrent();
            $table->integer('action_id')->unsigned();
            $table->string('action');
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::drop('userhistories');
    }
}
