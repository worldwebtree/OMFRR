<?php

namespace Database\Factories;

use App\Models\Admin\PostRestaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsersFeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = new User();
        $postRestaurant = new PostRestaurant();

        $userFeedbacks =  [
            'user_id' => $user->get('id'),
            'post_restaurant_id' => $postRestaurant->get('id'),
            'username' => $user->get('name'),
            'restaurant_name' => $postRestaurant->get('title'),
            'feedback' => fake()->realText(),
            'feedback_status' => fake()->randomElement(['positive', 'negative', 'neutral']),
            'category' => fake()->randomElement(['Service', 'Food']),
        ];

        return $userFeedbacks;
    }
}
