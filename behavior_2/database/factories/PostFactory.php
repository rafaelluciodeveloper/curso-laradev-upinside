<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Model\Post::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence(8),
        'subtitle' => $faker->sentence(16),
        'description' => $faker->paragraph(10)
    ];

});