<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evenement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenementen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Horeca');
            $table->string('Prijzen');
            $table->timestamp('Versiering');
            $table->string('Communicatie');
            $table->string('Entree');
            $table->string('Uitvoering');
            $table->rememberToken();
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
        Schema::dropIfExists('evenementen');
    }
}
