<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
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
        $categories = Category::all();
        return view('product.show', compact('product','categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $product = Product::firstOrCreate([ //Надо переделать на артикул
            'title' => $data['title']
        ], $data);

        return redirect()->route('products.index');
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return view('product.show', compact('product'));
    }
}
