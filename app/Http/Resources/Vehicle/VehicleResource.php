<?php

namespace App\Http\Resources\Vehicle;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
			'num_id' => $this->num_id,
			'title' => $this->title,
			'content' => $this->content,
			'options' => $this->options,
		];
        //return parent::toArray($request);
    }
}
