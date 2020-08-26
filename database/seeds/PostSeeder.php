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
                'image' => 'Post1.jpg',
                'user_id' => 1,
                'deleted_at' => null,
            ],
            [
                'title' => 'Second Post',
                'content' => 'Youre telling the enemy exactly what youre going to do.
                No wonder youve been fighting Lorem Ipsum your entire adult life.',
                'image' => 'Post2.jpg',
                'user_id' => 2,
                'deleted_at' => null,
            ],
            [
                'title' => 'Third Post',
                'content' => 'An extremely credible source has called my office
                and told me that Lorem Ipsums birth certificate is a fraud.
                Lorem Ipsum is unattractive, both inside and out.',
                'image' => 'Post2.jpg',
                'user_id' => 3,
                'deleted_at' => null,
            ],
            [
                'title' => 'Fourth Post',
                'content' => 'Youve been fighting Lorem Ipsum your entire adult life.',
                'image' => 'Post3.jpg',
                'user_id' => 4,
                'deleted_at' => '2020-08-26 07:52:47',
            ],
            [
                'title' => 'Fifth Post',
                'content' => 'Lorem Ipsum is unattractive, both inside and out.',
                'image' => 'Post1.jpg',
                'user_id' => 5,
                'deleted_at' => null,
            ],
        );

        // insert seeds
        foreach ($posts as $key => $value) {
            DB::table('posts')->insert([
                'title' => $value['title'],
                'content' => $value['content'],
                'image' => $value['image'],
                'user_id' => $value['user_id'],
                'deleted_at' => $value['deleted_at'],
            ]);
        }
    }
}
