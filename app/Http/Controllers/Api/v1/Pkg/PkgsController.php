<?php

namespace App\Http\Controllers\Api\v1\Pkg;

use App\Http\Controllers\Controller;
use App\Models\Pkg\Pkg;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PkgsController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Pkg\Pkg  $pkg
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Pkg $pkg)
	{
        $outs = $pkg->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Pkg::all();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Pkg\Pkg  $pkg
	 * @return \Illuminate\Http\Response
	 */
	public function show(Pkg $pkg)
	{
		$outs = $pkg;

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

		$outs = Pkg::create([
			'title' => $request->input('title') . $postfix,
			'content' => $request->input('content') . $postfix,
		]);

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkg\Pkg  $pkg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pkg $pkg)
    {
        $outs = $pkg->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
