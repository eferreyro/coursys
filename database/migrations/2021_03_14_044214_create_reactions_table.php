<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Reaction;
class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->enum('status', [Reaction::LIKE, Reaction::DISLIKE]);

            //Generacion de referencias de llave foraneas
            $table->unsignedBigInteger('user_id');
            
            //Relacion de tabla Polimorfica
            $table->unsignedBigInteger('reactionable_id');
            $table->string('reactionable_type');
            
            //Restricciones de llave foraneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('reactions');
    }
}
