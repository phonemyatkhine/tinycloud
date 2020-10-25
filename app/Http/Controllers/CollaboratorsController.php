<?php

namespace App\Http\Controllers;

use App\Models\Collaborators;
use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborators = Collaborators::all();
        return $collaborators;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collaborators.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborators $collaborators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborators $collaborators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborators $collaborators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborators $collaborators)
    {
        //
    }
}
