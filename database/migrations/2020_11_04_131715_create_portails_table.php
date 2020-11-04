<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portails', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image');
            $table->string('position');
            $table->integer('utilisation')->nullable();
            $table->foreignId('users_id')->nullable()->constrained();
            $table->foreignId('serveur_id')->nullable()->constrained();
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
        Schema::dropIfExists('portails');
    }
}
