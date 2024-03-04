<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if a user with the specified email already exists
        $existingUser = User::where('email', config('constant.ADMIN_EMAIL'))->first();

        // If no user exists with this email, proceed to insert a new user
        if (!$existingUser) {
            User::create([
                'first_name'        => 'Admin',
                'last_name'         => 'Admin',
                'gender'            => 'M',
                'email'             => config('constant.ADMIN_EMAIL'),
                'email_verified_at' => now(),
                'password'          => Hash::make(config('constant.ADMIN_PASSWORD')),
                'role'              => config('constant.USER_ROLE.admin'),
            ]);
        }
    }
}
