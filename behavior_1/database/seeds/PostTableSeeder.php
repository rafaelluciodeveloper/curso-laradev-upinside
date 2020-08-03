<?php

use Illuminate\Database\Seeder;
use LaraDev\Model\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,10)->create();
    }
}
