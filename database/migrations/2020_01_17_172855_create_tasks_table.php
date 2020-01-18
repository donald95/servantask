<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_end_real');
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('project_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table
                ->foreign('parent_id')
                ->references('id')
                ->on('tasks');
            $table
                ->foreign('project_id')
                ->references('id')
                ->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
