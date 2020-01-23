<?php

namespace App\Http\Controllers\Api\v1\Care;

use App\Http\Controllers\Controller;
use App\Models\Care\Care;
use Illuminate\Http\Request;

class CaresController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Care\Care  $care
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Care $care)
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
	 * @param  \App\Models\Care\Care  $care
	 * @return \Illuminate\Http\Response
	 */
	public function show(Care $care)
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
     * @param  \App\Models\Care\Care  $care
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Care $care)
    {
        //
    }
}
