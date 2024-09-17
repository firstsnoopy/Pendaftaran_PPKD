<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\levels;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        $user = User::whereNull('deleted_at')->get();
        $user = User::with('jurusans', 'levels')->get();
        return view('admin.user.index', compact('user'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'invalid credentials']);
    }

    public function create()
    {
        $user = User::get();
        $level = levels::get();
        $jurusan = Jurusan::get();
        return view('admin.user.create', compact('user', 'level', 'jurusan'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        User::create([
            'id_level' => $request->id_level,
            'id_jurusan' => $request->id_jurusan,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->to('user');
    }

    public function destroy(string $id)
    {
        // $peserta->delete();
        $user = User::findOrFail($id);
        $user->deleted_at = now(); // Set the deleted_at timestamp to the current time
        $user->save(); // Save the changes
        Alert::success('Success', 'Data berhasil dihapus sementara');
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus sementara');
    }
}
