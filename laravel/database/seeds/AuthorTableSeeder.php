<?php

use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('author')->insert([
            [
                'name' =>'admin'
            ],
            [
                'name' =>'tom'
            ],
            [
                'name' =>'jack'
            ],
            [
                'name' =>'ko'
            ],
        ]);
    }
}
