<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombang = Gelombang::all();
        return view('admin.gelombang.index', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gelombang = Gelombang::get();
        return view('admin.gelombang.create', compact('gelombang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gelombang::create([
            'nama_gelombang' => $request->nama_gelombang,
            'aktif' => $request->aktif,

        ]);

        return redirect()->to('gelombang');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gelombang $gelombang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gelombang $gelombang, $id)
    {
        $gelombang = Gelombang::find($id);
        return view('admin.gelombang.edit', compact('gelombang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gelombang $gelombang, $id)
    {
        $gelombang = Gelombang::find($id);
        $data = $request->validate([
            'nama_gelombang' => 'required|string',
            'aktif' => 'required|radio',
        ]);
        $gelombang->update($data);
        return redirect()->route('gelombang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gelombang $gelombang)
    {
        $gelombang->delete();
        return redirect()->route('gelombang.index');
    }
}
