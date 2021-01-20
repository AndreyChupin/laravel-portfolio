<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 8; $i++) {
            \App\Models\Hub::factory()->times(1)->create();
        }
    }
}
