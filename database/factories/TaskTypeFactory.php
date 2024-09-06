<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id'=>'01',
            'type_name'=>'ราชการ',
            'created_at'=> now(),
            'updated_at' => now(),
            'created_by'=> now(),
            'updated_by' => now(),
        ];

        [
            'type_id'=>'02',
            'type_name'=>'ลาป่วย',
            'created_at'=> now(),
            'updated_at' => now(),
            'created_by'=> now(),
            'updated_by' => now(),
        ];

        [
            'type_id'=>'03',
            'type_name'=>'ประชุม',
            'created_at'=> now(),
            'updated_at' => now(),
            'created_by'=> now(),
            'updated_by' => now(),
        ];
    }
}
