<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $exampleEmployees = [
            "Kris Wells" => "A571916931",
            "Mary Anderson" => "A199135293",
            "Andrea Batchley" => "A1412171282",
            "Donna Daylow" => "A619311386",
            "Steven Dumbell" => "A921160679"
        ];

        foreach ($exampleEmployees as $name => $id) {
            DB::table('users')->insert([
                'name' => $name,
                'email' => str_replace(' ', '', strtolower($name)).'@wonde.com',
                'password' => Hash::make('password'),
                'wonde_employee_id' => $id
            ]);
        }
    }
}
