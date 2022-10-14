<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('items.index', compact('items'));
    }

    public function create(Item $item)
    {
        return view('items.create', compact('item'));
    }

    public function store()
    {
        Item::query()->create($this->validateRequest());

        return redirect('items');
    }

    public function show(Item $item)
    {

        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function  update(Item $item)
    {
        $item->update($this->validateRequest());
        return redirect('/items/'. $item->id);
    }

    public function delete()
    {

    }

    public function destroy()
    {

    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'url' => 'required|URL',
            'price' => 'required|numeric',
            'qty' => 'required|numeric'
        ]);
    }
}
