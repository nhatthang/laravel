<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'desc'=>$faker->paragraph(2),
        'price'=>$faker->randomFloat()
    ];
});
