<?php

namespace App\Models\Pkg;

use Illuminate\Database\Eloquent\Model;

class Pkg extends Model
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
