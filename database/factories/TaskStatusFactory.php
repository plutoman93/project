<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskStatus>
 */
class TaskStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_status_id'=>$this->faker->userName(),
            'task_status_name'=>$this->faker->text(),
            'created_at'=> now(),
            'updated_at' => now(),
            'created_by'=> now(),
            'updated_by' => now(),
        ];
    }
}
