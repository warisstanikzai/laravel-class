<?php

use App\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->sentence(4),
        'price'       => $faker->numberBetween(0, 300)
    ];
});
