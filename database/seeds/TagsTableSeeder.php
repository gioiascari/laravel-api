<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tags;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Hip-Hop', 'Rap', 'Pop', 'R&B'];
        foreach($tags as $tag){
            $newTag = new Tags;
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag);
            $newTag->save();

        }
    }
}
