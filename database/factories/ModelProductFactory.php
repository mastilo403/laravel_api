<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,500),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(5,50),
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
