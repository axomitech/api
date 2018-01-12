<?php

use Faker\Generator as Faker;
use App\Model\Product;
$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'product_id'=>Product::all()->random(),
        'customer'=>$faker->word,
        'review'=>$faker->text,
        'star'=>$faker->numberBetween(0,5)
    ];
});
