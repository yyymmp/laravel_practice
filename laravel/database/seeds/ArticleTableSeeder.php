<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('article')->insert([
            [
                'article_name' => '疫情发展',
                'author_id' => rand(1,3),
            ],
            [
                'article_name' => '病毒发展',
                'author_id' => rand(1,3),
            ],
            [
                'article_name' => '武汉发展',
                'author_id' => rand(1,3),
            ]
        ]);
    }
}
