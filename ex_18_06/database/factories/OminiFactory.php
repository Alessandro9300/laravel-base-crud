<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omini;
use Faker\Generator as Faker;

$factory->define(Omini::class, function (Faker $faker) {
    return [
      'first_name' => $faker -> firstName(),
      'last_name' => $faker -> lastName(),
      'adress' => $faker -> streetAddress(),
      'code' => $faker -> postcode(),
      'state' => $faker -> state(),
      'phone_number' => $faker -> phoneNumber(),
      'role' => $faker -> word()
    ];
});
