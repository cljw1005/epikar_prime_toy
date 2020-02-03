<?php

namespace App\Http\Resources\Corp;

use Illuminate\Http\Resources\Json\JsonResource;

class CorpDmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
    		'id' => $this->id,
			'dealer_group_code' => $this->dealer_group_code,
			'num_serial' => $this->num_serial,
			'name' => $this->name,
		];
        //return parent::toArray($request);
    }
}
