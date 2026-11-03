<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // Pastikan menggunakan Model Item (singular/tanpa 's' atau sesuaikan dengan nama model kamu)

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Menyimpan data ke tabel database
        Item::create([
            'code'          => $request->code,
            'item_name'     => $request->item_name,
            'category'      => $request->category,
            'stock'         => $request->stock, // Sesuaikan dengan name di form HTML (stock atau stok)
            'condition'     => $request->condition,
            'room_location' => $request->room_location,
        ]);

        // Arahkan kembali setelah berhasil (Perbaiki syntax ->with() yang tadinya error)
        return redirect()->back()->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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