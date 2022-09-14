<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajNovuKolonuNagrada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kvizs', function (Blueprint $table) {
            $table->after('voditelj', function ($table) {
                $table->string('nagrada');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kvizs', function (Blueprint $table) {
            $table->dropColumn('nagrada');
        });
    }
}
