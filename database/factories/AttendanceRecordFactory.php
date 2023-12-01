<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\attendance_record;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\attendance_record>
 */
class AttendanceRecordFactory extends Factory
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
            // check in time random between 8:00 - 12:00
            'check_in_time' => $this -> faker -> dateTimeBetween('08:00:00', '12:00:00'),
            // check out time random between 13:00 - 17:00
            'check_out_time' => $this -> faker -> dateTimeBetween('13:00:00', '17:00:00'),
            
        ];
    }
}
