<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        foreach($posts as $post) {
              $newComment = new Comment();
              $newComment->post_id = $post->id;
              $newComment->author = $faker->name;
              $newComment->text = $faker->word(3);

              $newComment->save();
        }
    }
}