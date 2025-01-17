<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' -> Employer::factory(),
            'title' -> fake()->jobtitle,
            'salary' -> fake()->randomelement(['$50,000', '$90,000', '150,000']),
            'location' -> 'Remote',
            'schedule' -> 'full time',
            'url' -> fake()->url,
            'featured' -> false
        ];
    }
}
