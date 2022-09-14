<?php

namespace Database\Seeders;

use App\Models\Takmicar;
use Illuminate\Database\Seeder;

class TakmicarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Takmicar::factory()->count(70)->create();
    }
}
