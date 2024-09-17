<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $jurusan = Jurusan::whereNull('deleted_at')->get();
        return view('admin.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::get();
        return view('admin.jurusan.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,

        ]);

        return redirect()->to('jurusan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan, $id)
    {
        $jurusan = Jurusan::find($id);
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan, $id)
    {
        $jurusan = Jurusan::find($id);
        $data = $request->validate([
            'nama_jurusan' => 'required|string',
        ]);
        $jurusan->update($data);
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->deleted_at = now(); // Set the deleted_at timestamp to the current time
        $jurusan->save(); // Save the changes
        Alert::success('Success','Data berhasil dihapus sementara');
        return redirect()->route('jurusan.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
