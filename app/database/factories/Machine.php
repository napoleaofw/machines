<?php

use Faker\Generator as Faker;
use App\Models\Machine;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->numberBetween(1000, 9999),
        'name' => $faker->jobTitle,
        'credit_value' => $faker->randomFloat(4, 1, 100),
        'description' => $faker->optional($weight = 0.2)->paragraph,
        'observation' => $faker->optional($weight = 0.5)->paragraph,
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
