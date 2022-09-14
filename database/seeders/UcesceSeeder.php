<?php

namespace Database\Seeders;

use App\Models\Ucesce;
use Illuminate\Database\Seeder;

class UcesceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ucesce::factory()->count(150)->create();
    }
}
