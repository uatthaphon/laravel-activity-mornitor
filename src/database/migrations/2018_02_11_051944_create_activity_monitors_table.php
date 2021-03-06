<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_monitors', function (Blueprint $table) {

            $table->increments('id');
            $table->string('log_name')->nullable();
            $table->text('description');
            $table->integer('happen_to_id')->nullable();
            $table->string('happen_to_type')->nullable();
            $table->integer('act_by_id')->nullable();
            $table->string('act_by_type')->nullable();
            $table->text('traces')->nullable();
            $table->text('meta')->nullable();
            $table->string('agent')->nullable();
            $table->string('ip');
            $table->timestamps();

            $table->index('log_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_monitors');
    }
}
