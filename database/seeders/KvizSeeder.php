<?php

namespace Database\Seeders;

use App\Models\Kviz;
use Illuminate\Database\Seeder;

class KvizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kviz::factory()->count(50)->create();
    }
}
