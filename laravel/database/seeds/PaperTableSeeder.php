<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paper')->insert([
            'paper_name' => "三年模拟",
            'paper_score' => 100,
            'start_time' => time(),
            'duration'  => '120',
        ]);
    }
}
