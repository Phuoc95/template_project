<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // $faker = \Faker\Factory::create();

        $date = Carbon::now()->toDateTimeString();

        $data = [
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '$2y$10$VaKLa873qWm7NaGLQMtfJ.lO5whjaniLtPZJ8UPb1rg28y3UUaeqS', 'remember_token' => '', 'created_at' => $date, 'updated_at' =>$date],
            ['name' => 'phuoc', 'email' => 'phuoc@gmail.com', 'password' => '$2y$10$RdL3kjkT8kZPUvyGPCi3I.XAgZh1U47VpNEE9i/pYyScwNTNwmcc6', 'remember_token' => '', 'created_at' => $date, 'updated_at' => $date],
        ];
        foreach ($data as $item) {
            User::create($item);
        } //
    }
}
