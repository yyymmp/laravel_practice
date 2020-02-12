<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'paper_name' => "三年模拟",
            'paper_score' => 100,
            'start_time' => time(),
            'duration'  => '120',
        ]);
    }
}
