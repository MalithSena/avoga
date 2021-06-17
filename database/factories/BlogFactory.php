<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2, 4),
            'slug' => $this->faker->sentence(1),
            'background_img' => $this->faker->imageUrl('1920', '1280'),
            'post_img' => $this->faker->imageUrl('900', '300'),
            'body' => $this->faker->paragraphs(rand(10,12), true)            
        ];
    }
}
