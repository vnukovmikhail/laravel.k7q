<?php

namespace Database\Factories;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hours = $this->faker->numberBetween(1, 15);
        $minutes = $this->faker->numberBetween(1, 59);
        return [
            /* 'title' => $this->faker->words(rand(2,6), true),
            'description' => $this->faker->text(),
            'lessons_count'=> $this->faker->numberBetween(10,50),
            'length'=> "{$this->faker->numberBetween(1, 15)}h {$this->faker->numberBetween(1, 59)}m", */

            'title' => ucfirst(fake()->words(rand(2,6), true)),
            'description' => fake()->paragraph(2),
            'lessons_count'=> $this->faker->numberBetween(10,50),
            'length'=> "{$hours}h {$minutes}m",
        ];
    }
}
