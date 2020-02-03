<?php

namespace App\Http\Controllers\Api\v1\Care;

use App\Http\Controllers\Controller;
use App\Models\Care\Care;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Care\CareCollection;
use App\Http\Resources\Care\CareResource;

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
        $outs = Care::orderBy('updated_at')->paginate(PM_PAGINATION_LIMIT_DEFAULT);

        return new CareCollection($outs);
    
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Care\Care  $care
	 * @return \Illuminate\Http\Response
	 */
	public function show(Care $care)
	{
        return new CareResource($care);
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
            'vehicle_num_id' => $request->input('vehicle_num_id'). $postfix,
        ]);
        
        return new CareResource($outs);
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
