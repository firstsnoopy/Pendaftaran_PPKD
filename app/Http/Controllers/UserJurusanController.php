<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\levels;
use App\Models\UserJurusan;
use RealRashid\SweetAlert\Facades\Alert;


class UserJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserJurusan::with('users', 'levels', 'jurusans')->whereNull('deleted_at')->get();
        // dump($users);

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        // dd($users);
        return view('admin.userjurusan.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $user = User::with('jurusans')->where('id_level', '7')->whereNull('deleted_at')->get();
        $levels = levels::where('id', 3)->get();
        $jurusan = Jurusan::whereNull('deleted_at')->get();
        return view('admin.userjurusan.create', compact('user', 'jurusan', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        UserJurusan::create([
            'id_user' => 0, // Pastikan id_user ada di tabel user_jurusan
            'id_level' => $request->id_level,
            'id_jurusan' => $request->id_jurusan,
        ]);
        Alert::success('Success', 'Data Berhasil Ditambah');
        return redirect()->route('userjurusan.index')->with('success', 'User created successfully');
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
        $users = UserJurusan::findOrFail($id);
        $jurusan = Jurusan::whereNull('deleted_at')->get();
        return view('admin.userjurusan.edit', compact('users', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = UserJurusan::findOrFail($id);
        // Validate the request data
        $request->validate([
            'id_jurusan' => 'required',
        ]);

        // Update the user's jurusan
        $user->id_jurusan = $request->input('id_jurusan');
        $user->save();

        // Redirect back to the index page with a success message
        Alert::success('Success', 'Data Berhasil Ditambah');
        return redirect()->route('userjurusan.index')->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pic = UserJurusan::findOrFail($id);
        $pic->delete();
        Alert::success('Success', 'Data berhasil dihapus sementara');
        return redirect()->route('userjurusan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
