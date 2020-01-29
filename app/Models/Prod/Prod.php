<?php

namespace App\Models\Prod;

use Illuminate\Database\Eloquent\Model;

class Prod extends Model
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
