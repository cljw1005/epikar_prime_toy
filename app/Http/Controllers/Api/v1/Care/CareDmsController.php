<?php

namespace App\Http\Controllers\Api\v1\Care;

use App\Http\Controllers\Controller;
use App\Models\Care\CareDm;
use Illuminate\Http\Request;

class CareDmsController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Care\CareDm  $careDm
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(CareDm $careDm)
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
	 * @param  \App\Models\Care\CareDm  $careDm
	 * @return \Illuminate\Http\Response
	 */
	public function show(CareDm $careDm)
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
     * @param  \App\Models\Care\CareDm  $careDm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareDm $careDm)
    {
        //
    }
}
