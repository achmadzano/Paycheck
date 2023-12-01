<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\attendance_record;
use Database\Factories\AttendanceRecordFactory;
use Faker\Factory as Faker;

class AttendanceRecordSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // You can adjust the loop count based on how many records you want to generate
        for ($i = 1; $i <= 10; $i++) {
            $checkInTime = $faker->dateTimeBetween('08:00:00', '12:00:00');
            $checkOutTime = $faker->dateTimeBetween('13:00:00', '17:00:00');

            $status = $checkInTime > new \DateTime('09:00:00') ? 'Late' : 'Attend';

            // Populate the database with the generated data
            DB::table('attendance_records')->insert([
                'employee_id' => $i,
                'check_in_time' => $checkInTime,
                'check_out_time' => $checkOutTime,
                'status' => $status,
            ]);
        }
    }
}
