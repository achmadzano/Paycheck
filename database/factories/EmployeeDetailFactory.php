<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee_detail>
 */
class EmployeeDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id' => $this -> faker -> numberBetween(1, 10),
            'payroll_record_id' => $this -> faker -> numberBetween(1, 10),
            'attendance_record_id' => $this -> faker -> numberBetween(1, 10),
            'username' => $this -> faker -> userName(),
            'password' => $this -> faker -> password(),
            'role' => $this -> faker -> randomElement(['admin', 'employee']),
        ];
    }
}
