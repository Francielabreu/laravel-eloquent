<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title'=> 'youtube',
            'content'=> 'a historia do youtube',
            'user_id'=> '1',
            'date'=> '2022-10-10',
            
            
            
        ]);
    }
}
