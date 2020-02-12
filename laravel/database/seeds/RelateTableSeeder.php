<?php

use Illuminate\Database\Seeder;

class RelateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('relation')->insert([
            [
                'article_id' => rand(1,3),
                'key_id' => rand(1,3),
            ],
            [
                'article_id' => rand(1,3),
                'key_id' => rand(1,3),
            ],
            [
                'article_id' => rand(1,3),
                'key_id' => rand(1,3),
            ]
        ]);
    }
}
