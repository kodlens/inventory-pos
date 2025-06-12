<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'lname' => 'AMPARADO',
                'fname' => 'ESHEN',
                'mname' => 'N',
                'email' => 'eshen@mail.com',
                'password' => Hash::make('a'),
                'role' => 'admin'
            ],
            [
                'lname' => 'ABAPO',
                'fname' => 'JADE',
                'mname' => 'N',
                'email' => 'jade@mail.com',
                'password' => Hash::make('a'),
                'role' => 'staff'
            ],
            [
                'lname' => 'ZAPANTA',
                'fname' => 'JESSEL',
                'mname' => 'N',
                'email' => 'jessel@mail.com',
                'password' => Hash::make('a'),
                'role' => 'staff'
            ],
        ];

        User::insert($data);
    }
}
