<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'product-type' => 'required',
            'product-name' => 'required',
            'product-color' => 'required',
            'product-price' => ['required', 'integer'],
        ]);

        $product = new Product();

        $product -> type = $request -> input('product-type');
        $product -> name = $request -> input('product-name');
        $product -> color = $request -> input('product-color');
        $product -> price = $request -> input('product-price');

        $product-> save();

        return redirect() -> route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product)
    {
        return view('products.show', [
            'product' => Product::findOrFail($product)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $product)
    {
        return view('products.edit', [
            'product' => Product::findOrFail($product)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product)
    {
        $request -> validate([
            'product-type' => 'required',
            'product-name' => 'required',
            'product-color' => 'required',
            'product-price' => ['required', 'integer'],
        ]);

        $toUpDate = Product::findOrFail($product);

        $toUpDate -> type = $request -> input('product-type');
        $toUpDate -> name = $request -> input('product-name');
        $toUpDate -> color = $request -> input('product-color');
        $toUpDate -> price = $request -> input('product-price');

        $toUpDate -> save();

        return redirect() -> route('products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product)
    {
        $toDelete = Product::findOrFail($product);
        $toDelete -> delete();

        return redirect() -> route('products.index');
    }
}