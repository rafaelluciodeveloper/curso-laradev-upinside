<?php

use Faker\Generator as Faker;
use LaraDev\Model\Categories;
use LaraDev\Model\Post;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentence(10);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'subtitle' => $faker->sentence(10),
        'description' => $faker->paragraph(5),
        'publish_at' => $faker->dateTime(),
        'category' => function(){
            return factory(Categories::class)->create()->id;
        },
    ];
});
