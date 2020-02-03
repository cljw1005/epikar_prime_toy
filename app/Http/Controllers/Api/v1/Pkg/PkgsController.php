<?php

namespace App\Http\Controllers\Api\v1\Pkg;

use App\Http\Controllers\Controller;
use App\Models\Pkg\Pkg;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Pkg\PkgCollection;
use App\Http\Resources\Pkg\PkgResource;


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
        $outs = Pkg::orderBy('updated_at')->paginate(PM_PAGINATION_LIMIT_DEFAULT);

        return new PkgCollection($outs);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Pkg\Pkg  $pkg
	 * @return \Illuminate\Http\Response
	 */
	public function show(Pkg $pkg)
	{
        return new PkgResource($pkg);
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

        return new PkgResource($outs);
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
        $outs = $pkg->update($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
