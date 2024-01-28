<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ItemController extends Controller
{
    /**
     * Instantiate a new ItemController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-Item|edit-Item|delete-Item', ['only' => ['index','show']]);
       $this->middleware('permission:create-Item', ['only' => ['create','store']]);
       $this->middleware('permission:edit-Item', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-Item', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('items.index', [
            'items' => Item::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request): RedirectResponse
    {
        Item::create($request->all());
        return redirect()->route('items.index')
                ->withSuccess('New Item is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $Item): View
    {
        return view('items.show', [
            'Item' => $Item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $Item): View
    {
        return view('items.edit', [
            'Item' => $Item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $Item): RedirectResponse
    {
        $Item->update($request->all());
        return redirect()->back()
                ->withSuccess('Item is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $Item): RedirectResponse
    {
        $Item->delete();
        return redirect()->route('items.index')
                ->withSuccess('Item is deleted successfully.');
    }
}