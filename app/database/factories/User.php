<?php

use Faker\Generator as Faker;
use App\Models\User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'type' => $faker->randomElement(['administrator', 'fiscal']),
        'commission_percentage' => $faker->randomFloat(2, 0, 100),
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
