<?php

namespace Database\Factories;

use App\Models\Post;
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
        return [
            'title' => $this->faker->sentence(2, 4),
            'slug' => $this->faker->sentence(1),
            'background_img' => $this->faker->imageUrl('1920', '1280'),
            'post_image' => $this->faker->imageUrl('900', '300'),
            'similar' => $this->faker->numberBetween(1, 10),
            'days' => $this->faker->numberBetween(7, 20),
            'tagline' => $this->faker->sentence(1, 5),
            'description' => $this->faker->paragraphs(rand(10, 15), true),
            'tips' => $this->faker->paragraphs(rand(10, 15), true),
            'from_to' => $this->faker->sentence(2, 4),
            'tour_itinerary' => $this->faker->paragraphs(rand(10, 15), true),
            'introduction' => $this->faker->paragraphs(rand(10, 15), true),
            'gallery_image_1' => $this->faker->imageUrl('900', '300'),
            'gallery_image_2' => $this->faker->imageUrl('900', '300'),
            'gallery_image_3' => $this->faker->imageUrl('900', '300'),
            'gallery_image_4' => $this->faker->imageUrl('900', '300'),
            'gallery_image_5' => $this->faker->imageUrl('900', '300'),
            'gallery_image_6' => $this->faker->imageUrl('900', '300'),
            'extra_image_1' => $this->faker->imageUrl('900', '300'),
            'extra_image_2' => $this->faker->imageUrl('900', '300'),
            'extra_image_3' => $this->faker->imageUrl('900', '300'),
            'extra_image_4' => $this->faker->imageUrl('900', '300'),
            'map_url' => $this->faker->sentence(5, 6)
        ];
    }
}
