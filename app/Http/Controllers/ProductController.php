<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Gate::allows('product-manage'))
            return view('products.create');
        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        if (Gate::allows('product-manage')){
            Product::create($request->all());
            return redirect()->route('products.index');
        }
        abort(403);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if (Gate::allows('product-manage'))
            return view('products.edit', compact('product'));
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if (Gate::allows('product-manage')){
            $product->update($request->all());
            return redirect()->route('products.index');
        }
        abort(403);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (Gate::allows('product-delete')) {
            $product->delete();
            return redirect()->route('products.index');
        }
        abort(403);
    }
}
