<?php

namespace App\Http\Resources\Corp;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CorpDmCollection extends ResourceCollection
{
    private function setItem()
	{
		$this->collection->transform(function($item) {
			$outs = $item->toArray();

			$outs['dealer_group_code'] = mb_substr($item->dealer_group_code, 0, 200);

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
