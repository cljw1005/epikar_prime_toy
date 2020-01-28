<?php

namespace App\Http\Controllers\Api\v1\Subsc;

use App\Http\Controllers\Controller;
use App\Models\Subsc\Subsc;
use Illuminate\Http\Request;

class SubscsController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Subsc\Subsc  $subsc
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Subsc $subsc)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Subsc\Subsc  $subsc
	 * @return \Illuminate\Http\Response
	 */
	public function show(Subsc $subsc)
	{
		//
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subsc\Subsc  $subsc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subsc $subsc)
    {
        //
    }
}
