<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::with('users')->with('mesure_units')->with('sped_codes')->with('product_types')->get()->toJson();
        print_r($product);
    }

    public function create()
    {
    }
    
    public function store(Request $request)
    {
        $product = new Product();
        $product->create($request->all());
        echo "created!";
    }

    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
