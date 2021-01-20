<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale,
            'last_name' => $this->faker->lastName,
            'nickname' => $this->faker->userName,
            'password' => password_hash($this->faker->word, PASSWORD_DEFAULT),
            'specialization' => $this->faker->words(3, true),
            'avatar' => "https://via.placeholder.com/48",
            'karma' => $this->faker->randomFloat(1, $min = 0, $max = 50),
            'rating' => $this->faker->randomFloat(1, $min = -15, $max = 50),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
