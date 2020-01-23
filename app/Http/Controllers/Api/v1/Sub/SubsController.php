<?php

namespace App\Http\Controllers\Api\v1\Sub;

use App\Http\Controllers\Controller;
use App\Models\Sub\Sub;
use Illuminate\Http\Request;

class SubsController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Sub\Sub  $sub
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Sub $sub)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Sub\Sub  $sub
	 * @return \Illuminate\Http\Response
	 */
	public function show(Sub $sub)
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
     * @param  \App\Models\Sub\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sub $sub)
    {
        //
    }
}
