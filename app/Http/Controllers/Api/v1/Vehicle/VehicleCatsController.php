<?php

namespace App\Http\Controllers\Api\v1\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle\VehicleCat;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Vehicle\VehicleCatCollection;
use App\Http\Resources\Vehicle\VehicleCatResource;
class VehicleCatsController extends Controller
{
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle\VehicleCat  $vehicleCat
     * @return \Illuminate\Http\Response
     */
     public function destroy(VehicleCat $vehicleCat)
     {
        $outs = $vehicleCat->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $outs = VehicleCat::orderBy('updated_at')->paginate(PM_PAGINATION_LIMIT_DEFAULT);

        return new VehicleCatCollection($outs);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle\VehicleCat  $vehicleCat
     * @return \Illuminate\Http\Response
     */
     public function show(VehicleCat $vehicleCat)
     {
        return new VehicleCatResource($vehicleCat);
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

		$outs = VehicleCat::create([
            'options' => $request->input('content') . $postfix,
            'content' => $request->input('content') . $postfix,
           
		]);

		return new VehicleCatResource($outs);
		//return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle\VehicleCat  $vehicleCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleCat $vehicleCat)
    {
        $outs = $vehicleCat->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    
    }

   
}
