<?php

use Faker\Generator as Faker;
use App\Models\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    	'description' => $faker->sentence(20),
    	'image' => $faker->imageUrl($width = 640, $height = 480),
    	'status'  => 1
    ];
});
