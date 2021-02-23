<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'HTML',
            'CSS',
            'LARAVEL',
            'JAVASCRIPT',
            'PHP'
        ];
        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->tag_name = $tag;
            $newTag->tag_slug =  Str::slug($tag);
            $newTag->save();
        }
    }
}