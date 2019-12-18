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
        // $this->call(UsersTableSeeder::class);
        User::create([
            'id_perusahaan' => 1,
            'email' => 'yuyun.dwi87@gmail.com',
            'password' => bcrypt('admin123'),
            'status' => 1
        ]);
    }
}
