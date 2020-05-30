<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'order_id' => function(){
            return factory(Order::class)->create()->id;
        },
        'product_id' => function(){
            return factory(Product::class)->create()->id;
        },
        'quantity' => $faker -> randomDigit()
    ];
});
