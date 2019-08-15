<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use laravelito\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'body'=> $faker->paragraph,
    ];
});
