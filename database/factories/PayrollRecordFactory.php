<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payroll_record>
 */
class PayrollRecordFactory extends Factory
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
            'payroll_date' => $this -> faker -> date(),
            'gross_salary' => $this -> faker -> numberBetween(1000, 10000),
            'deduction' => $this -> faker -> numberBetween(100, 1000),
            'net_salary' => $this -> faker -> numberBetween(1000, 10000),
            'tax' => $this -> faker -> numberBetween(100, 1000),
        ];
    }
}
