<?php
namespace Database\Seeders;

use \App\Models\HubPost;
use Illuminate\Database\Seeder;

class HubPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1700; $i++) {
            HubPost::factory()->times(1)->create();
        }
    }
}
