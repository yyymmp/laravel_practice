<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comment')->insert([
            [
            'comment' => '评论1',
            'article_id' => rand(1,4)
            ],
            [
                'comment' => '评论2',
                'article_id' => rand(1,4)
            ],
            [
                'comment' => '评论2',
                'article_id' => rand(1,4)
            ],
            [
                'comment' => '评dad论2',
                'article_id' => rand(1,4)
            ],
            [
                'comment' => '评论da2',
                'article_id' => rand(1,4)
            ],
            [
                'comment' => '评da论2',
                'article_id' => rand(1,4)
            ],
        ]);
    }
}
