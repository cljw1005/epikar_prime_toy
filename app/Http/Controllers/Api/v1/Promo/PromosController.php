<?php

namespace App\Http\Controllers\Api\v1\Promo;

use App\Http\Controllers\Controller;
use App\Models\Promo\Promo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Promo\PromoCollection;
use App\Http\Resources\Promo\PromoResource;


class PromosController extends Controller
{
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promo\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        $outs = $promo->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promo\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
      //$outs = $subsc;

      return new PromoResource($promo);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Promo::orderBy('updated_at')->paginate(PM_PAGINATION_LIMIT_DEFAULT);

        return new PromoCollection($outs);
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

		$outs = Promo::create([
			'title' => $request->input('title') . $postfix,
            'content' => $request->input('content') . $postfix,
		]);

        return new PromoResource($outs);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promo\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $outs = $promo->update($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

   
}
