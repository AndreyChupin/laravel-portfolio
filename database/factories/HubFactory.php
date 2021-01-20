<?php

namespace Database\Factories;

use App\Models\Hub;
use Illuminate\Database\Eloquent\Factories\Factory;

class HubFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hub::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hubs = ['php', 'laravel', 'symfony', 'yii', 'java', 'cms', 'api', 'sql'];
        $strings_quality = Hub::select()->count('id');

        return [
            'title' => $hubs[$strings_quality],
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
