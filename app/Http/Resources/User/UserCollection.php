<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    private function setItem()
	{
		$this->collection->transform(function($item) {
			$outs = $item->toArray();

			unset($outs['created_at']);
			unset($outs['options']);
			unset($outs['updated_at']);
			$outs['name'] = mb_substr($item->name, 0, 200);

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