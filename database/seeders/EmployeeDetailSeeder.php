<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\employee;

class EmployeeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // employee_detail::factory()->count(10)->create();
        $employee_detail = [
            [
                'employee_id' => 1,
                'payroll_record_id' => 1,
                'attendance_record_id' => 1,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 2,
                'payroll_record_id' => 2,
                'attendance_record_id' =>2,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 3,
                'payroll_record_id' => 3,
                'attendance_record_id' =>3,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 4,
                'payroll_record_id' => 4,
                'attendance_record_id' =>4,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 5,
                'payroll_record_id' => 5,
                'attendance_record_id' =>5,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 6,
                'payroll_record_id' => 6,
                'attendance_record_id' =>6,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 7,
                'payroll_record_id' => 7,
                'attendance_record_id' =>7,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 8,
                'payroll_record_id' => 8,
                'attendance_record_id' =>8,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 9,
                'payroll_record_id' => 9,
                'attendance_record_id' =>9,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            [
                'employee_id' => 10,
                'payroll_record_id' => 10,
                'attendance_record_id' =>10,
                'username' => fake() -> userName(),
                'password' => fake() -> password(),
                'role' => fake() -> randomElement(['admin', 'employee']),
            ],
            ];
            DB::table('employee_details')->insert($employee_detail);
    }
}
