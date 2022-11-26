<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone_number' => '019283731',
            'password' => Hash::make('Pa$$word'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
            'user_type' => 'App\Models\User',
        ]);
    }
}
