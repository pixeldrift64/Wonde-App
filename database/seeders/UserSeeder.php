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
            "Selina Andrews" => "A500460806",
            "Adrian Blacker" => "A2082387062",
            "Lynn Chase" => "A1018509654",
            "Steven Dumbell" => "A921160679",
            "Ruth Hatchett" => "A593143780",
            "Christopher Jones" => "A1535425120",
            "Mark Lubbock" => "A269983963",
            "Delia Mumford" => "A39307028",
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
