<?php

namespace App\Http\Controllers\Api\v1\Subsc;

use App\Http\Controllers\Controller;
use App\Models\Subsc\Subsc;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


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
		$outs = $subsc->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Subsc\Subsc  $subsc
	 * @return \Illuminate\Http\Response
	 */
	public function show(Subsc $subsc)
	{
		$outs = $subsc;

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Subsc::all();

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

		$outs = Subsc::create([
			'title' => $request->input('title') . $postfix,
            'content' => $request->input('content') . $postfix,
            'vehicle_vin' => $request->input('vehicle_vin'). $postfix,
            'pkg_id' => $request->input('pkg_id'). $postfix,
            
		]);

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
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
    	$outs = $subsc->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
