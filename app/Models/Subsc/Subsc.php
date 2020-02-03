<?php

namespace App\Models\Subsc;

use App\Models\Vehicle\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Subsc extends Model
{
	protected $casts = [
		'options' => 'array',
	];

    protected $fillable = [
		'content',
		'options',
		'title',
	];

	/**
	 * subsc-vehicle: 일대일
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function vehicle()
	{
		return $this->hasOne(Vehicle::class, 'num_id', 'vehicle_num_id');
	}
}
