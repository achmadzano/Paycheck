<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\payroll_record;

class PayrollRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // payroll_record::factory()->count(10)->create();
        $payroll_record = [
            [
                'employee_id' => 1,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 2,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 3,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 4,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 5,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 6,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 7,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 8,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 9,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
            [
                'employee_id' => 10,
                'payroll_date' => fake() -> date(),
                'gross_salary' => fake() -> numberBetween(1000, 10000),
                'deduction' => fake() -> numberBetween(100, 1000),
                'net_salary' => fake() -> numberBetween(1000, 10000),
                'tax' => fake() -> numberBetween(100, 1000),
            ],
        ];
        DB::table('payroll_records')->insert($payroll_record);
    }
}
