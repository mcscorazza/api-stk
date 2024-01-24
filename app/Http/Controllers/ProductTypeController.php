<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{

    public function index()
    {
        $prod_type = ProductType::all()->toJson();
        print_r($prod_type);
    }

    public function store(Request $request)
    {
        $prod_type = new ProductType();
        $prod_type->create($request->all());
        echo "created!";
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductType $productType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
