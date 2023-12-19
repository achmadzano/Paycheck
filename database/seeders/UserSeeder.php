<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id();
        // $table->string('name');
        // $table->string('email')->unique();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->enum('role', ['super admin', 'admin', 'user'])->default('user');  
        // $table->rememberToken();
        // $table->timestamps();
        // make seeders for each role
        $user = [
            [
                'name' => 'zano',
                'email' => 'achmad@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'yujin',
                'email' => 'yujin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',
            ]
            ];
            DB::table('users')->insert($user);
    }
}
