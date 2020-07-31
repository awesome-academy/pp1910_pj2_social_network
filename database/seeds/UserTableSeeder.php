<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'birthday' => '1996-10-21',
            'address' => 'Hà Nội - Việt Nam',
            'email_verified_at' => now(),
        ]);

        factory(User::class, 5)->create();
    }
}
