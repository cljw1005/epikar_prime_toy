<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Foo\Foo;
use Faker\Generator as Faker;

$factory->define(Foo::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph,
		'content' => $faker->sentence,
    ];
});
