<?php

namespace App\Http\Controllers\Api\v1\Foo;

use App\Http\Controllers\Controller;
use App\Models\Foo\Foo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FoosController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Foo\Foo  $foo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Foo $foo)
	{
		$outs = $foo->delete();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Foo::all();

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Foo\Foo  $foo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Foo $foo)
	{
		$outs = $foo;

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

		$outs = Foo::create([
			'title' => $request->input('title') . $postfix,
			'content' => $request->input('content') . $postfix,
		]);

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foo\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foo $foo)
    {
    	$outs = $foo->update($request->all()); //dd($request->all());

		return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
