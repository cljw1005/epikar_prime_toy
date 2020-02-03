<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Promo\Promo;
use Faker\Generator as Faker;

$factory->define(Promo::class, function (Faker $faker) {
    return [
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
