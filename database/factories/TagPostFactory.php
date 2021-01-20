<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use App\Models\TagPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TagPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return validate_hub_post(TagPost::class, Tag::class, Post::class, 'tag_id', 'post_id', $this->faker);
    }
}
