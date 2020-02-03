<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vehicle\VehicleCat;
use Faker\Generator as Faker;

$factory->define(VehicleCat::class, function (Faker $faker) {
   
        return [
            'content' => $faker->paragraph,
            'options' => $faker->sentence,
        ];
    
});
