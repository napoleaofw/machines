<?php

use Faker\Generator as Faker;
use App\Models\Machine;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->numberBetween(1000, 9999),
        'name' => $faker->unique()->safeColorName, // unique only for appearance, not in database
        'credit_value' => $faker->randomFloat(4, 1, 100),
        'description' => $faker->paragraph,
        'observation' => $faker->paragraph,
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
