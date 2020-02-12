<?php

use Illuminate\Database\Seeder;

class KeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keyword')->insert([
            ['keyword' => 'nginx'],
            ['keyword' => 'linux'],
            ['keyword' => 'java'],
        ]);
    }
}
