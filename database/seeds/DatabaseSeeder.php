<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $admin = User::create([
            'name' => 'NARAYANI',
            'email' => 'admin@narayanidentalskincenter.in',
            'email_verified_at' => '2021-08-10 19:00:02',
            'password' => bcrypt('Admin@123'),
        ]);
    }
}
