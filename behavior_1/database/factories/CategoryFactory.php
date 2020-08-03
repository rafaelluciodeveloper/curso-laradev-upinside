<?php

use Faker\Generator as Faker;
use LaraDev\Model\Categories;

$factory->define(Categories::class, function (Faker $faker) {
        $title = $faker->sentence(3);
    return [
        'title' => $title,
        'slug' => str_slug($title)
    ];
});
