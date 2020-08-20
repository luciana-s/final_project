<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder array
        $posts = array(
            [
                'title' => 'First Post',
                'content' => 'Lorem Ipsum is FAKE TEXT! An extremely credible 
                source has called my office and told me that Lorem Ipsums 
                birth certificate is a fraud. Lorem Ipsum is unattractive, both inside and out.',
                'user_id' => 1,
                'liked_status' => 0,
                'reported_status' => 0,
            ],
            [
                'title' => 'Second Post',
                'content' => 'Youre telling the enemy exactly what youre going to do. 
                No wonder youve been fighting Lorem Ipsum your entire adult life.',
                'user_id' => 2,
                'liked_status' => 0,
                'reported_status' => 0,
            ],
            [
                'title' => 'Third Post',
                'content' => 'An extremely credible source has called my office 
                and told me that Lorem Ipsums birth certificate is a fraud. 
                Lorem Ipsum is unattractive, both inside and out.',
                'user_id' => 3,
                'liked_status' => 0,
                'reported_status' => 0,
            ],
            [
                'title' => 'Fourth Post',
                'content' => 'Youve been fighting Lorem Ipsum your entire adult life.',
                'user_id' => 4,
                'liked_status' => 0,
                'reported_status' => 0,
            ],
        );

        // insert seeds
        foreach ($posts as $key => $value) {
            DB::table('posts')->insert([
                'title' => $value['title'],
                'content' => $value['content'],
                'user_id' => $value['user_id'],
                'liked_status' => $value['liked_status'],
                'reported_status' => $value['reported_status'],
            ]);
        }
    }
}
