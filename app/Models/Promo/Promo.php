<?php

namespace App\Models\Promo;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $casts = [
		'options' => 'array',
	];

    protected $fillable = [
		'content',
		'options',
		'title',
	];
}
