<?php

use Faker\Generator as Faker;

$factory->define(App\UserRole::class, function (Faker $faker) {
    return [
        'role_name' 	=> $faker->name,
        'description'	=> $faker->paragraph,
    ];
});
