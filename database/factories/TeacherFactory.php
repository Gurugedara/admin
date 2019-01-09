<?php

use Faker\Generator as Faker;

$factory->define(App\teacher::class, function (Faker $faker) {
    return [
        "nic" => str_random(10),
        "phone" => str_random(10),
        "school" => $faker->word,
        "education" => $faker->word,
        "subjects" => $faker->word,
        "qualification" => $faker->word,
        "user_id" => factory('App\User')->create()
    ];
});
