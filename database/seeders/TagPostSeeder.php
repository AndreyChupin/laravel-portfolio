<?php

namespace Database\Seeders;

use \App\Models\TagPost;
use Illuminate\Database\Seeder;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1700; $i++) {
            TagPost::factory()->times(1)->create();
        }
    }
}
