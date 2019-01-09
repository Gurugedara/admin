<?php

use Faker\Generator as Faker;

$factory->define(App\institute::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "address" => $faker->address,
        "telephone" => str_random(10),
    ];
});
