<?php

use Faker\Generator as Faker;
use App\Models\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
    	'image' => $faker->imageUrl($width = 640, $height = 480),
    	'product_id' => $faker->randomDigit()
    ];
});
