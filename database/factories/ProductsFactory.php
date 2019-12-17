<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name" => $faker->words(3,true),
        "description" => $faker->paragraph(3,true),
        "price" => $faker->numberBetween(1000, 9999999),
        "category_id" => 1,
    ];
});
