<?php

namespace App\Http\Controllers;

use App\Models\Foodstaff;
use Illuminate\Http\Request;

class FoodstaffController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('foodstaff.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('foodstaff.create');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Foodstaff  $foodstaff
     * @return \Illuminate\Http\Response
     */
    public function show(Foodstaff $foodstaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foodstaff  $foodstaff
     * @return \Illuminate\Http\Response
     */
    public function edit(Foodstaff $foodstaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foodstaff  $foodstaff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foodstaff $foodstaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foodstaff  $foodstaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foodstaff $foodstaff)
    {
        //
    }
}
