<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcescesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucesces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kviz_id')->constrained('kvizs');
            $table->foreignId('takmicar_id')->constrained('takmicars');
            $table->string('rang');
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
        Schema::dropIfExists('ucesces');
    }
}
