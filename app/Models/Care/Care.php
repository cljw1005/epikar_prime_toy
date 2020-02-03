<?php

namespace App\Models\Care;

use App\Models\Vehicle\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Care extends Model
{

	protected $casts = [
		'options' => 'array',
	];

    protected $fillable = [
		'content',
		'options',
		'title',
		'vehicle_id',
	];


	/**
	 * care-vehicle: 일대다
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function vehicle()
	{
		return $this->belongsTo(Vehicle::class, 'vehicle_num_id', 'num_id');
	}

	
}
