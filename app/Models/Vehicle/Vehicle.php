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
        'num_id',
	];

	/**
	 * care-vehicle: 일대다
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function cares()
	{
		return $this->hasMany(Care::class, 'vehicle_num_id', 'num_id');
	}

	/**
	 * subsc-vehicle: 일대일
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function subsc()
	{
		return $this->hasOne(Subsc::class, 'vehicle_num_id', 'num_id');
	}

	/**
	 * user-vehicle: 다대일
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
