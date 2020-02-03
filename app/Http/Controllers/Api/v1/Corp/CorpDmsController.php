<?php

namespace App\Http\Controllers\Api\v1\Corp;

use App\Http\Controllers\Controller;
use App\Models\Corp\CorpDm;
use Illuminate\Http\Request;
use App\Http\Resources\Corp\CorpDmCollection;
use App\Http\Resources\Corp\CorpDmResource;


class CorpDmsController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corp\CorpDm  $corpDm
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorpDm $corpDm)
    {
        $outs = $corpDm->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = CorpDm::orderBy('updated_at')->paginate(PM_PAGINATION_LIMIT_DEFAULT);

        return new CorpDmCollection($outs);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Corp\CorpDm  $corpDm
     * @return \Illuminate\Http\Response
     */
    public function show(CorpDm $corpDm)
    {
        return new CorpDmResource($corpDm);
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

		$outs = CorpDm::create([
			'dealer_group_code' => $request->input('dealer_group_code') . $postfix,
            'num_serial' => $request->input('num_serial') . $postfix,
            'name' => $request->input('name') . $postfix,
		]);

        return new CorpDmResource($outs);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Corp\CorpDm  $corpDm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorpDm $corpDm)
    {
        $outs = $corpDm->update($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
  
    }

    
}
