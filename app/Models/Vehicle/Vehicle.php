<?php

namespace App\Models\Vehicle;

use App\Models\Care\Care;
use App\Models\Subsc\Subsc;
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
		return $this->hasMany(Care::class);
	}

	/**
	 * sub-vehicle: 일대일
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function subsc()
	{
		return $this->hasOne(Subsc::class);
	}



}
