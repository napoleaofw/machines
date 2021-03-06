<?php

use Faker\Generator as Faker;
use App\Models\Establishment;

$factory->define(Establishment::class, function (Faker $faker) {
    return [
        'corporate_name' => $faker->unique()->company,
        'trade_name' => $faker->unique()->company,
        'responsible' => $faker->optional($weight = 0.2)->name,
        'address' => $faker->streetAddress . ' - ' . $faker->city . '/' . $faker->stateAbbr,
        'email' => $faker->unique()->safeEmail,
        'phone1' => $faker->optional($weight = 0.05)->cellphone(false),
        'phone2' => $faker->optional($weight = 0.1)->cellphone(false),
        'phone3' => $faker->optional($weight = 0.5)->landline(false),
        'commission_percentage' => $faker->randomFloat(2, 0, 100),
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
