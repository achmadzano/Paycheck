<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
//use factory;
use Database\Factories\employeeFactory;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // employee::factory()->count(10)->create();
        $employee = [
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake() -> email(),
                'phone' => fake() -> phoneNumber(),
                'address' => fake() -> address(),
                'hire_date' => fake() -> date(),
                'salary' => fake() -> numberBetween(1000, 10000),
                'job_title' => fake() -> jobTitle(),
            ],
            ];
            DB::table('employees')->insert($employee);
    }
}
