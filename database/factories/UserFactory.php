<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "firstname" => $faker->name,
        "Lastname" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => bcrypt('secret'),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
    ];
});
