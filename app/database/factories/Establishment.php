<?php

use Faker\Generator as Faker;
use App\Models\Establishment;

$factory->define(Establishment::class, function (Faker $faker) {
    return [
        'corporate_name' => $faker->bs,
        'trade_name' => $faker->company,
        'responsible' => $faker->name,
        'address' => $faker->address,
        'phone1' => $faker->tollFreePhoneNumber,
        'phone2' => $faker->tollFreePhoneNumber,
        'phone3' => $faker->tollFreePhoneNumber,
        'commission_percentage' => $faker->randomFloat(2, 0, 100),
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
