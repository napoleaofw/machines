<?php

use Faker\Generator as Faker;
use App\Models\Establishment;

$factory->define(Establishment::class, function (Faker $faker) {
    return [
        'corporate_name' => $faker->optional($weight = 0.1)->bs,
        'trade_name' => $faker->company,
        'responsible' => $faker->optional($weight = 0.2)->name,
        'address' => $faker->streetAddress . ' - ' . $faker->city . '/' . $faker->stateAbbr,
        'phone1' => $faker->optional($weight = 0.05)->cellphone(false),
        'phone2' => $faker->optional($weight = 0.1)->cellphone(false),
        'phone3' => $faker->optional($weight = 0.5)->landline(false),
        'commission_percentage' => $faker->randomFloat(2, 0, 100),
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
