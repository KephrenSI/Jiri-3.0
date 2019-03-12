<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplementationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('project_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('jiri_id')->unsigned();
            $table->string('url_project');
            $table->string('url_repo');
//            $table->decimal('weight')->default('0');
            $table->decimal('mean_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('implementations');
    }
}
