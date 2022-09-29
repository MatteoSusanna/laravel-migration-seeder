<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 255)->nullable();
            $table->string('stazione_partenza', 255);
            $table->string('stazione_arrivo', 255);
            $table->time('orario_partenza', 0);
            $table->time('orario_arrivo', 0);
            $table->date('data_partenza');
            $table->string('codice_treno', 255);
            $table->string('numero_carrozze', 2);
            $table->boolean('in_orario');
            $table->boolean('cancellato');

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
        Schema::dropIfExists('trains');
    }
}
