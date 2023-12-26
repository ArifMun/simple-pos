<?php

namespace App\Http\Controllers;

use App\Models\Inventories;
use App\Http\Requests\StoreInventoriesRequest;
use App\Http\Requests\UpdateInventoriesRequest;
use Illuminate\Support\Facades\Validator;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventories::all();
        return \view('inventories.produk', \compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('inventories.tambah-produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoriesRequest $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'price' => 'required:number',
                'stock' => 'required:number',
            ]
        );

        if ($validate->fails()) {
            return \back()
                ->withErrors($validate)
                ->withInput();
        }

        $code = 'PRD-' . strtoupper(uniqid());

        Inventories::create([
            'code'  => $code,
            'name'  => $request->input('name'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
        ]);

        alert()->success('Produk berhasil ditambahakan');
        return \redirect()->route('inventories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventories $inventories)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventories $inventories, $id)
    {
        $inventories = Inventories::find($id);
        return \view('inventories.edit-produk', \compact('inventories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoriesRequest $request, Inventories $inventories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventories $inventories)
    {
        //
    }
}
