<?php

namespace App\Http\Controllers;

use App\Models\MesureUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\MesureUnitController;
use Response;

class MesureUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesure_unit = MesureUnit::all()->toJson();
        print_r($mesure_unit);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mesure_unit = new MesureUnit();
        $mesure_unit->create($request->all());
        echo "created!";
    }

    /**
     * Display the specified resource.
     */
    public function show(MesureUnit $mesureUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MesureUnit $mesureUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MesureUnit $mesureUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MesureUnit $mesureUnit)
    {
        //
    }
}
