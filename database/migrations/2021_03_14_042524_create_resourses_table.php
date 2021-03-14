<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resourses', function (Blueprint $table) {
            $table->id();

            $table->string('url');
            //Relacion de tabla Polimorfica
            $table->unsignedBigInteger('resourceable_id');
            $table->string('resourceable_type');

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
        Schema::dropIfExists('resourses');
    }
}
