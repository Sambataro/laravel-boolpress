<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newPost = new Post();
            $newPost->title = $faker->word(2);
            $newPost->sentence = $faker->sentence(10);
            $newPost->author = $faker->name;
            $newPost->save();
        }
    }
}
