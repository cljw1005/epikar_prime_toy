<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User\UserDm;
use Illuminate\Http\Request;

class UserDmsController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\User\UserDm  $userDm
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(UserDm $userDm)
	{
		//
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\User\UserDm  $userDm
	 * @return \Illuminate\Http\Response
	 */
	public function show(UserDm $userDm)
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\UserDm  $userDm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDm $userDm)
    {
        //
    }
}
