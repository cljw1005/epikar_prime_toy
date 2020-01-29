<?php

namespace App\Http\Controllers\Api\v1\Prod;

use App\Http\Controllers\Controller;
use App\Models\Prod\Prod;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
		$outs = $prod->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $outs = Prod::all();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Prod\Prod  $prod
	 * @return \Illuminate\Http\Response
	 */
	public function show(Prod $prod)
	{
		$outs = $prod;

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

		$outs = Prod::create([
			'title' => $request->input('title') . $postfix,
			'content' => $request->input('content') . $postfix,
		]);

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
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
    	$outs = $prod->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
