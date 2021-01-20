<?php

namespace Database\Factories;

use App\Models\Hub;
use App\Models\HubPost;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class HubPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HubPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return validate_hub_post(HubPost::class, Hub::class, Post::class, 'hub_id', 'post_id', $this->faker);
    }
}
