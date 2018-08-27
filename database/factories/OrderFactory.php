<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_name' => $faker->name,
        'date'          => $faker->date('Y-m-d')
    ];
});
