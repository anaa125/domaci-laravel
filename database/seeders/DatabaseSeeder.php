<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $kviz = new KvizSeeder;
        $kviz->run();

        $takmicar = new TakmicarSeeder;
        $takmicar->run();

        $ucesce = new UcesceSeeder;
        $ucesce->run();
    }
}
