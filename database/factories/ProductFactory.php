<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use laravelito\Product;
use Faker\Generator as Faker;
use laravelito\User;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'name' => $faker->sentence,
        'detail' => $faker->paragraph
    ];
});
