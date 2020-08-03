<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AddressTableSeeder::class,
            PostTableSeeder::class,
            CategoryTableSeeder::class,
            PostCategoryTableSeeder::class,
            //CommentTableSeeder::class,
        ]);
    }
}
