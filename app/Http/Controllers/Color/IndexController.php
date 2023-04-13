<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Requests\Color\StoreRequest;
use App\Models\Color;

class IndexController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('color.index', compact('colors'));
    }

    public function create()
    {
        return view('color.create');
    }

    public function delete(Color $color)
    {
        $color->delete();
        return redirect()->route('colors.index');
    }

    public function edit(Color $color)
    {
        return view('color.edit', compact('color'));
    }

    public function show(Color $color)
    {
        return view('color.show', compact('color'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Color::firstOrCreate($data);

        return redirect()->route('colors.index');
    }

    public function update(UpdateRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);

        return view('color.show', compact('color'));
    }
}
