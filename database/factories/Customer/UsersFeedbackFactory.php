<?php

namespace Database\Factories\Customer;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer\UsersFeedback>
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
        $randomStrings = [
            'This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.',
            'First time in and YOU have to go! It’s the cutest little spot with amazing food. The is to die for. IT WAS FIRE!! The service we received was so amazing and we will definitely be back again. They made us feel welcomed and gave us an amazing experience.',
            'It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service. Staff are extremely knowledgeable and make great recommendations.',
            'This place is great! Atmosphere is chill and cool but the staff is also really friendly. They know what they’re doing and what they’re talking about, and you can tell making the customers happy is their main priority. Food is pretty good, some italian classics and some twists, and for their prices it’s 100% worth it.',
            'Do yourself a favor and visit this lovely restaurant in. The service is unmatched. The staff truly cares about your experience. The food is absolutely amazing, everything we tasted melted in other mouths. Absolutely the best meal we had while in. Highly recommend!',
            'Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.',
            'I have to say, I enjoyed every single bite of the meal in. I had a 3 course meal, with a couple of beers. Considering the quality, the price is reasonable. Ideal for those who want a romantic night out. There was also plenty of room for bigger groups.',
            'This is my absolute favorite restaurant in. The food is always fantastic and no matter what I order I am always delighted with my meal! Servers are also great and always efficient, happy and polite. Can’t wait to return and wouldn’t hesitate to recommend to anyone looking for somewhere to eat in',
            'We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant. Cocktails wow, wine great and lovely selection of beers. Love this place and will continue to visit.',
            'This spot gives extraordinary service and yummy meals. One of my favourite restaurants around town. The meals served rapidly and the rates were reasonable. Highly recommended.',
            'Delicious food, waiters are very attentive, and super nice atmosphere. Plus it’s all at an affordable price.',
            'Totally recommend it and will definitely come back again.',
        ];

        $userFeedbacks =  [
            'post_restaurant_id' => fake()->randomDigit(),
            'username' => 'name',
            'restaurant_name' => fake()->randomElement(['sheraz', 'serena', 'hujra']),
            'feedback' => fake()->randomElement($randomStrings),
            'feedback_status' => fake()->randomElement(['positive', 'negative', 'neutral']),
            'category' => fake()->randomElement(['Service', 'Food']),
        ];

        return $userFeedbacks;
    }
}
