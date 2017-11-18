<?php

use Faker\Generator as Faker;
use App\Models\Transaction;

$factory->define(Transaction::class, function (Faker $faker) {
    $credit_quantity = $faker->randomFloat(4, 1, 10000);
    $credit_value = $faker->randomFloat(4, 1, 100); // get the credit value of machine
    $credit_amount = round($credit_quantity * $credit_value, 2);
    $commission_percentage = $faker->randomFloat(2, 0, 100); // get the commission percentage of the establishment
    $commission_value = round($credit_amount * ($commission_percentage / 100), 2);
    $total_amount = round($credit_amount - $commission_value, 2);

    return [
        'type' => $faker->randomElement(['revenue', 'expense']),
        'date' => $faker->dateTimeThisYear(),
        'commission_percentage' => $commission_percentage,
        'commission_value' => $commission_value,
        'credit_quantity' => $credit_quantity,
        'credit_value' => $credit_value,
        'credit_amount' => $credit_amount,
        'total_amount' => $total_amount,
        'observation' => $faker->optional($weight = 0.5)->paragraph
    ];
});
