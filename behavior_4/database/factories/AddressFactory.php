<?php

use Faker\Generator as Faker;

$factory->define(\App\Address::class, function (Faker $faker) {
    return [
        'user' => $faker->randomElement(\App\User::all()->pluck('id')->toArray()),
        'address' => $faker->streetAddress(),
        'number' => $faker->randomNumber(4),
        'complement' => $faker->streetName(),
        'zipcode' => $faker->postcode(),
        'city' => $faker->city(),
        'state' => $faker->city(),
        'status' => rand(0, 1),
    ];
});
