<?php

namespace App\Models\Foo;

use Illuminate\Database\Eloquent\Model;

class Foo extends Model
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
