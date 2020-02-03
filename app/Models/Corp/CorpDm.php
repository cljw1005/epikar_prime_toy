<?php

namespace App\Models\Corp;

use Illuminate\Database\Eloquent\Model;

class CorpDm extends Model
{
    protected $casts = [
		'options' => 'array',
	];

    protected $fillable = [
		'dealer_group_code',
		'num_serial',
		'name',
	];
}
