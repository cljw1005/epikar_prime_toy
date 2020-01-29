<?php

namespace App\Http\Controllers\Api\v1\Care;

use App\Http\Controllers\Controller;
use App\Models\Care\Care;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
		$outs = $care->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Care::all();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Care\Care  $care
	 * @return \Illuminate\Http\Response
	 */
	public function show(Care $care)
	{
		$outs = $care;

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postfix = '_' . now()->toString();

		$outs = Care::create([
			'title' => $request->input('title') . $postfix,
            'content' => $request->input('content') . $postfix,
            'vehicle_vin' => $request->input('vehicle_vin'). $postfix,
		]);

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
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
        $outs = $care->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
