<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentences(1, true),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl(400, 300,'cats'),
        'duration' => $faker->numberBetween(0,200),
        'releaseDate' => $faker->date('Y-m-d','now'),
        'genre' => $faker->word  
    ];
});
