<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pkg\PkgProd;
use Faker\Generator as Faker;

$factory->define(PkgProd::class, function (Faker $faker) {
	$idPkg = \App\Models\Pkg\Pkg::inRandomOrder()->first()->id;
	$ids = PkgProd::wherePkgId($idPkg)->get()->pluck('prod_id')->toArray();

	return [
		'pkg_id' => $idPkg,
		'prod_id' => \App\Models\Prod\Prod::whereNotIn('id', $ids)->inRandomOrder()->first()->id,
	];
});
