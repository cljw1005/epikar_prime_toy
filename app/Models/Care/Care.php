<?php

namespace App\Models\Care;

use App\Models\Vehicle\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Care extends Model
{
	/**
	 * care-vehicle: 일대다
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function vehicle()
	{
		return $this->belongsTo(Vehicle::class, 'vehicle_vin', 'vin');
	}
}
