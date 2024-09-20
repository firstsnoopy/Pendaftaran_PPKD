<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Gelombang;
use App\Models\UserJurusan;
use Illuminate\Http\Request;
use App\Models\peserta_pelatihan;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil user yang sedang login
        $user = auth()->user();
        // Ambil id_jurusan user dari relasi many-to-many
        $jurusanIds = $user->jurusans->pluck('id');
        // $userLevel = Auth::user()->id_level;
        $peserta = peserta_pelatihan::whereNull('deleted_at')->get();
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::all();
        $peserta = peserta_pelatihan::with('jurusan', 'gelombang')->get();

        $pesertapelatihans = peserta_pelatihan::whereIn('id_jurusan',  $jurusanIds)->whereHas('gelombang', function ($query) {
            $query->where('aktif', 1);
        })
            ->get();
        // if ($userLevel == 3) {
        //     $userJurusanIds = UserJurusan::where('id_user', $userId)->pluck('id_jurusan');
        //     $pesertas = peserta_pelatihan::whereIn('id_jurusan', '$userJurusanIds');
        //     $peserta = $pesertas->where('status', 2)->get();
        // } else {
        //     $peserta = peserta_pelatihan::all();
        // }
        return view('admin.peserta.index', compact('peserta', 'jurusan', 'pesertapelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::all();
        $peserta = peserta_pelatihan::get();
        return view('admin.peserta.create', compact('peserta', 'jurusan', 'gelombang'));
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

        return redirect()->route('terimakasih')->with('message', 'Data anda berhasil disimpan');
        Alert::success('Success Title', 'Success Message');
    }

    /**
     * Display the specified resource.
     */
    public function show(peserta_pelatihan $peserta_pelatihan, $id)
    {
        $peserta = peserta_pelatihan::find($id);
        return view('admin.peserta.detail', compact('peserta'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peserta_pelatihan $peserta, $id)
    {
        $peserta = peserta_pelatihan::find($id);
        return view('admin.peserta.edit', compact('peserta'))->with('message', 'Edit Berhasil');
        Alert::success('Success Title', 'Success Message');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peserta_pelatihan $peserta, $id)
    {
        $peserta = peserta_pelatihan::find($id);
        $data = $request->validate([
            'nama_lengkap' => 'required|string',
            'status' => 'required',
        ]);
        $peserta->update($data);
        Alert::success('Sukses', 'Data telah diubah');
        return redirect()->route('peserta.index', compact('peserta'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peserta_pelatihan $peserta, $id)
    {
        // $peserta->delete();
        $peserta = peserta_pelatihan::findOrFail($id);
        $peserta->deleted_at = now(); // Set the deleted_at timestamp to the current time
        // $peserta->save(); // Save the changes
        Alert::success('Success', 'Data berhasil dihapus sementara');
        return redirect()->route('peserta.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
