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
            'name' => $this->faker->name(),
            'email' => $this -> faker -> email(),
            'phone' => $this -> faker -> phoneNumber(),
            'address' => $this -> faker -> address(),
            'hire_date' => $this -> faker -> date(),
            'salary' => $this -> faker -> numberBetween(1000, 10000),
            'job_title' => $this -> faker -> jobTitle(),
        ];
    }
}
