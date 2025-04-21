<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
   
    // public function highestDiscountProduct() : JsonResponse {

    //    $product = Product::orderBy('discount', 'desc')->first();
    //    return response()->json($product);

    // }

    public function index()
    {
       return response()->json(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : JsonResponse
    {
        $product = Product::find($id);
        return $product 
            ? response()->json($product)
            : response()->json(['error' => 'Product not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
