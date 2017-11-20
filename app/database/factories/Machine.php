<?php

use Faker\Generator as Faker;
use App\Models\Machine;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->numberBetween(1000, 9999),
        'name' => $faker->unique()->company,
        'credit_value' => $faker->randomFloat(4, 1, 100),
        'description' => substr($faker->optional($weight = 0.2)->paragraph, 0, 500),
        'observation' =>substr($faker->optional($weight = 0.5)->paragraph, 0, 250),
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
