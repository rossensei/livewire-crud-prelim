<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'empname' => fake()->name(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Male']),
            'salary' => fake()->randomFloat(2,10000,999999),
            'department' => fake()->randomElement(['Board of Directors', 'Finance', 'Human Resources', 'Project Management Office', 'Quality Assurance', 'Information Technology', 'Legal', 'General Management']),
            'hire_date' => fake()->date()
        ];
    }
}
