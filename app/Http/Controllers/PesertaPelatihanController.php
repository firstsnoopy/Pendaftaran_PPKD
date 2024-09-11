<?php

namespace App\Http\Controllers;

use App\Models\peserta_pelatihan;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = peserta_pelatihan::all();
        return view('admin.peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peserta = peserta_pelatihan::get();
        return view('admin.peserta.create', compact('peserta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        peserta_pelatihan::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik'  => $request->nik,
            'kartu_keluarga' => $request->kartu_keluarga,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nama_sekolah' =>  $request->nama_sekolah,
            'kejuruan' =>  $request->kejuruan,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'aktivitas_saat_ini' =>  $request->aktivitas_saat_ini,
            'status' => $request->status,
        ]);

        return redirect()->to('peserta');
    }

    /**
     * Display the specified resource.
     */
    public function show(peserta_pelatihan $peserta_pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peserta_pelatihan $peserta_pelatihan, $id)
    {
        $peserta = peserta_pelatihan::find($id);
        return view('admin.peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peserta_pelatihan $peserta, $id)
    {
        $peserta = peserta_pelatihan::find($id);
        $data = $request->validate([

            'nama_lengkap' => 'required|string',
                'nik'  => 'required|string',
                'kartu_keluarga' => 'required|string',
                'jenis_kelamin'  => 'required|string',
                'tempat_lahir' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'pendidikan_terakhir' => 'required|string',
                'nama_sekolah' =>  'required|string',
                'kejuruan' =>  'required|string',
                'nomor_hp' => 'required|string',
                'email' => 'required|string',
                'aktivitas_saat_ini' =>  'required|string',
                'status' => 'required|nullable',
        ]);
        $peserta->update($data);
        return redirect()->route('peserta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peserta_pelatihan $peserta)
    {
        $peserta->delete();
        return redirect()->route('peserta.index');
    }
}
