<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Product::firstOrCreate($data);
        return redirect()->route('products.index');
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return view('product.show', compact('product'));
    }
}
