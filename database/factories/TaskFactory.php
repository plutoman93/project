<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_id'=>$this->faker->numberBetween(10000,99999),
            'task_name'=>$this->faker->jobTitle(),
            'task_detail'=>$this->faker->word(),
            'start_date'=>$this->faker->dateTime(),
            'due_date'=>$this->faker->dateTime(),
            'status_task_id'=>$this->faker->numberBetween(10000,99999),
            'type_id'=>$this->faker->numberBetween(10000,99999),
            'user_id'=>$this->faker->numberBetween(10000,99999),
            'created_at'=> now(),
            'updated_at' => now(),
            'created_by'=> now(),
            'updated_by' => now(),
        ];
    }
}
