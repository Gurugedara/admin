<?php

use Faker\Generator as Faker;

$factory->define(App\student::class, function (Faker $faker) {
    return [
        "nic" => str_random(10),
        "phone" => str_random(10),
        "school" => $faker->word,
        "age" => $faker->unique()->randomDigit,
        "olindex" => "",
        "alindex" =>"",
        "user_id" => factory('App\User')->create()
    ];
});
