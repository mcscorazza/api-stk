<?php

namespace App\Http\Controllers;

use App\Models\SpedCode;
use Illuminate\Http\Request;

class SpedCodeController extends Controller
{
    public function index()
    {
        $sped_code = SpedCode::all()->toJson();
        print_r($sped_code);
    }

    public function store(Request $request)
    {
        $sped_code = new SpedCode();
        $sped_code->create($request->all());
        echo "created!";
    }

    /**
     * Display the specified resource.
     */
    public function show(SpedCode $spedCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpedCode $spedCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SpedCode $spedCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpedCode $spedCode)
    {
        //
    }
}
