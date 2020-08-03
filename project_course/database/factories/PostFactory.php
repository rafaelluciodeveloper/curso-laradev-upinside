<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {

    $title = $faker->paragraph('1');

    return [
        'uri' => str_slug($title),
        'title' => $title,
        'subtitle' => $faker->paragraph(1),
        'content' => $faker->paragraph(10),
        'author'=> 1
    ];
});
