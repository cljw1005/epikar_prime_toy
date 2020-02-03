<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    private function setItem()
	{
		$this->collection->transform(function($item) {
			$outs = $item->toArray();

			//unset($outs['id']);
			unset($outs['email_verified_at']);
			unset($outs['password']);
			unset($outs['remember_token']);
			//$outs['id'] = mb_substr($item->name, 0, 20);
			//$outs['name'] = mb_substr($item->name, 0, 20);

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
