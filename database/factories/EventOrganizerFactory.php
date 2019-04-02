<?php

use Faker\Generator as Faker;

$factory->define(App\EventOrganizer::class, function (Faker $faker) {
    return [
        'eo_name' => $faker->name,
        'eo_email' => $faker->safeEmail,
        'password' => bcrypt('12345678'),
        'phone' => $faker->phoneNumber
    ];
});
