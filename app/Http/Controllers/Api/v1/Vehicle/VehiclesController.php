<?php

namespace App\Http\Controllers\Api\v1\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle\Vehicle;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Vehicle\VehicleCollection;
use App\Http\Resources\Vehicle\VehicleResource;

class VehiclesController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Vehicle\Vehicle  $vehicle
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Vehicle $vehicle)
	{
		$outs = $vehicle->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$outs = Vehicle::all();
		//return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
        $outs = Vehicle::orderBy('updated_at')->paginate(PM_PAGINATION_LIMIT_DEFAULT);

        return new VehicleCollection($outs);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Vehicle\Vehicle  $vehicle
	 * @return \Illuminate\Http\Response
	 */
	public function show(Vehicle $vehicle)
	{
		//$outs = $vehicle;
		//return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);

		return new VehicleResource($vehicle);
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

		$outs = Vehicle::create([
			'title' => $request->input('title') . $postfix,
            'content' => $request->input('content') . $postfix,
            'vin' => $request->input('vin') . $postfix,
		]);

		return new VehicleResource($outs);
		//return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $outs = $vehicle->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
