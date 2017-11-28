<?php

use Faker\Generator as Faker;
use App\Models\Transaction;

$factory->define(Transaction::class, function (Faker $faker) {
    $credit_quantity = $faker->randomFloat(4, 1, 10000);
    $credit_value = $faker->randomFloat(4, 1, 100); // get the credit value of machine
    $credit_amount = round($credit_quantity * $credit_value, 2);
    $fiscal_commission_percentage = $faker->randomFloat(2, 0, 25); // get the commission percentage of the fiscal
    $fiscal_commission_amount = round($credit_amount * ($fiscal_commission_percentage / 100), 2);
    $establishment_commission_percentage = $faker->randomFloat(2, 0, 25); // get the commission percentage of the establishment
    $establishment_commission_amount = round($credit_amount * ($establishment_commission_percentage / 100), 2);
    $total_amount = round($credit_amount - $establishment_commission_amount, 2);

    return [
        'type' => $faker->randomElement(['revenue', 'expense']),
        'date' => $faker->dateTimeThisYear(),
        'fiscal_commission_percentage' => $fiscal_commission_percentage,
        'fiscal_commission_amount' => $fiscal_commission_amount,
        'establishment_commission_percentage' => $establishment_commission_percentage,
        'establishment_commission_amount' => $establishment_commission_amount,
        'credit_quantity' => $credit_quantity,
        'credit_value' => $credit_value,
        'credit_amount' => $credit_amount,
        'total_amount' => $total_amount,
        'observation' => substr($faker->optional($weight = 0.5)->paragraph, 0, 250),
        'invoice_code' => $faker->numberBetween(100,999),
        'invoice_date' => $faker->dateTimeThisYear(),
    ];
});
