<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $body = '<h3>' . ucfirst($this->faker->word(7, true)) . '</h3><br>';
        for ($i = 0; $i < 4; $i++) {
            $body .= "<p><img src='" . "https://via.placeholder.com/780x433" . "' width='780' height='433'></p><br>" . '<h3>' . ucfirst($this->faker->word(
                7,
                true
            )) . '</h3><br><p>' . $this->faker->realText(
                    $maxNbChars = 700,
                    $indexSize = 2
                ) . '</p><br>';
        }
        $user = User::all()->random();

        return [
            'user_id' => $user->id,
            'title' => ucfirst($this->faker->words(7, true)),
            'img' => "https://via.placeholder.com/780x433",
            'description' => $this->faker->realText(
                $maxNbChars = 700,
                $indexSize = 2
            ),
            'body' => $body,
            'rating_up' => $this->faker->numberBetween(0, 120),
            'rating_down' => $this->faker->numberBetween(0, 105),
            'bookmarks' => $this->faker->numberBetween(0, 500),
            'views' => $this->faker->numberBetween(0, 5000),
            'comments' => $this->faker->numberBetween(0, 300),
            'created_at' => $this->faker->dateTimeBetween('2020-12-02 00:00:00', 'now'),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
