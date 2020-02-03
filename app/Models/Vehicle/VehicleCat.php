<?php

namespace App\Models\Vehicle;

use Illuminate\Database\Eloquent\Model;

class VehicleCat extends Model
{
    protected $casts = [
		'options' => 'array',
	];

    protected $fillable = [
		'content',
		'options',
		
	];
}
