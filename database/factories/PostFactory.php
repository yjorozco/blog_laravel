<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'category_id'=>Category::factory(),
            'slug'=>$this->faker->slug(),
            'title'=>$this->faker->sentence(),
            'excerpt'=> '<p>'.implode('</p><p>', $this->faker->paragraphs(2)).'</p>',
            'body'=>'<p>'.implode('</p><p>', $this->faker->paragraphs(6)).'</p>'
        ];
    }
}
