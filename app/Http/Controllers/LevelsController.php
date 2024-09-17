<?php

namespace App\Http\Controllers;

use App\Models\levels;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $level = levels::all();
        $levels = levels::whereNull('deleted_at')->get();
        return view('admin.level.index', compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = levels::get();
        return view('admin.level.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        levels::create([
            'nama_level' => $request->nama_level,
        ]);

        return redirect()->to('level');
    }

    /**
     * Display the specified resource.
     */
    public function show(levels $levels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(levels $levels, $id)
    {
        $level = levels::find($id);
        return view('admin.level.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $level = levels::findOrFail($id);
        $data = $request->validate([
            'nama_level' => 'required|string|max:255',
        ]);

        // Perbarui level dengan data yang sudah divalidasi
        $level->update($data);

        // Redirect ke route yang diinginkan setelah pembaruan
        return redirect()->route('level.index')->with('success', 'Level berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $levels = levels::findOrFail($id);
        $levels->deleted_at = now(); // Set the deleted_at timestamp to the current time
        $levels->save(); // Save the changes
        Alert::success('Success','Data berhasil dihapus sementara');
        return redirect()->route('level.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
