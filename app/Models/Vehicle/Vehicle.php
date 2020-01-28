<?php

namespace App\Models\Vehicle;

use App\Models\Care\Care;
use App\Models\Subsc\Subsc;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $casts = [
		'options' => 'array',
	];

    protected $fillable = [
		'content',
		'options',
        'title',
        'vin',
	];

	/**
	 * care-vehicle: 일대다
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function cares()
	{
		return $this->hasMany(Care::class, 'vehicle_vin', 'vin');
	}

	/**
	 * subsc-vehicle: 일대일
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function subsc()
	{
		return $this->hasOne(Subsc::class, 'vehicle_vin', 'vin');
	}

	/**
	 * user-vehicle: 다대일
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function users()
	{
		return $this->belongsTo(User::class);
	}
}
