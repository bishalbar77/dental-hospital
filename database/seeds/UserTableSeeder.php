<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'NARAYANI',
            'email' => 'admin@narayanidentalskincenter.in',
            'email_verified_at' => '2021-08-10 19:00:02',
            'password' => bcrypt('Admin@123'),
        ]);
    }
}
