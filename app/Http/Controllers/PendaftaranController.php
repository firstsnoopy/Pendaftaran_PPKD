<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Gelombang;
use Illuminate\Http\Request;
use App\Models\peserta_pelatihan;
use RealRashid\SweetAlert\Facades\Alert;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::where('aktif', '1')->get();
        $peserta = peserta_pelatihan::get();
        return view('pendaftaran.profile', compact('jurusan', 'peserta', 'gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile()
    {
        $profile = peserta_pelatihan::all();
        return view('pendaftaran.profile', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        peserta_pelatihan::create([
            'id_jurusan' => $request->id_jurusan,
            'id_gelombang' => $request->id_gelombang,
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

        Alert::success('Berhasil', 'Data anda telah kami simpan');
        return redirect()->to('pendaftaran')->with('message', 'Data anda berhasil disimpan');
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
