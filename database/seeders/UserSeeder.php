<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('passpass'),
            'email_verified_at'=> now(),
        ]);
        DB::table('users')->insert([
            'name' => 'testuser',
            'email' => 'test@test.com',
            'password' => Hash::make('passpass'),
            'email_verified_at'=> now(),
        ]);
    }
}
