<?php

namespace App\Http\Controllers\Api\v1\Prod;

use App\Http\Controllers\Controller;
use App\Models\Prod\Prod;
use Illuminate\Http\Request;

class ProdsController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Prod\Prod  $prod
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Prod $prod)
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
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Prod\Prod  $prod
	 * @return \Illuminate\Http\Response
	 */
	public function show(Prod $prod)
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
     * @param  \App\Models\Prod\Prod  $prod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prod $prod)
    {
        //
    }
}
