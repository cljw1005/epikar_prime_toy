<?php

namespace App\Http\Resources\Promo;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PromoCollection extends ResourceCollection
{
    private function setItem()
	{
		$this->collection->transform(function($item) {
			$outs = $item->toArray();
            
			unset($outs['options']);
			$outs['content'] = mb_substr($item->content, 0, 200);

			return $outs;
		});
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
		$this->setItem();

		return ['data' => $this->collection,];
		//return parent::toArray($request);
	}
}
