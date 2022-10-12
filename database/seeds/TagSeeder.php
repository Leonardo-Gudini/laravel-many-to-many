<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['tag1', 'tag2', 'tag3', 'tag4', 'tag5'];

        foreach ($tags as $tag) {
            $newtag = new Tag();
            $newtag->name = $newtag;
            $newtag->slug = Str::slug($tag);
            $newtag->save();    
        }
    }
}
