<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coin;
use App\Price;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt(Str::random(10)),
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Coin::class, function (Faker $faker) {
    return [
        'name' => Str::random(3)
    ];
});


$factory->define(Price::class, function (Faker $faker) {
    return [
        'price' => $faker->randomNumber(5),
        'coins_id' => $faker->randomNumber(1),
    ];
});
