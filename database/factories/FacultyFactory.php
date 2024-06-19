<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculty>
 */
class FacultyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'faculty_id'=>$this->faker->numberBetween(10000,99999),
            'faculty_name'=>$this->faker->jobTitle(),
            'created_at'=> now(),
            'updated_at' => now(),
            'created_by'=> now(),
            'updated_by' => now(),
        ];
    }
}
