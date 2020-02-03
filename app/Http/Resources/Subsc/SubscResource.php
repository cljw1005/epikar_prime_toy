<?php

namespace App\Http\Resources\Subsc;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscResource extends JsonResource
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
            'vehicle_num_id' => $this->vehicle_num_id,
            'pkg_id' => $this->pkg_id,
			'title' => $this->title,
			'content' => $this->content,
			'options' => $this->options,
		];
        //return parent::toArray($request);
    }
}
