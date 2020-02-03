<?php

namespace App\Http\Resources\Promo;

use Illuminate\Http\Resources\Json\JsonResource;

class PromoResource extends JsonResource
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
			'title' => $this->title,
			'content' => $this->content,
			'options' => $this->options,
		];
        //return parent::toArray($request);
    }
}
