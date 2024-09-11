@extends('layouts.base')
@section('content')
    <h1>Pendaftar</h1>

    <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <select type="text" name="id_jurusan" id="jurusan" class="form-control">
                <option value="">Pilih Kejuruan</option>
                @foreach ($jurusan as $item)
                <option value="{{$item->id}}">{{$item->nama_jurusan}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="gelombang">Gelombang</label>
            <select type="text" name="id_gelombang" id="gelombang" class="form-control">
                <option value="">Pilih Gelombang</option>
                @foreach ($gelombang as $item)
                <option value="{{$item->id}}">{{$item->nama_gelombang}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" class="form-control" engkap">
        </div>
        <div class="mb-3">
            <label for="NIK">Nomor Induk Kependudukan</label>
            <input type="number" placeholder="Nomor Induk Kependudukan" name="nik" id="nik" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="kartu_keluarga">Kartu Keluarga</label>
            <input type="file" name="kartu_keluarga" id="kartu_keluarga" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select type="text" placeholder="Jenis Kelamin" name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" placeholder="tempat Lahir" name="tempat_lahir" id="tempat_lahir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input type="text" placeholder="Pendidikan" name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" placeholder="Sekolah" name="nama_sekolah" id="nama_sekolah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="kejuruan">Kejuruan</label>
            <input type="text" name="kejuruan" id="kejuruan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nomor_hp">Nomor Telepon</label>
            <input type="number" placeholder="No Telp" name="nomor_hp" id="nomor_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" name="email" id="email" class="form-control"></input>
        </div>
        <div class="mb-3">
            <label for="aktivitas_saat_ini">Aktivitas</label>
            <input type="text" placeholder="Aktivitas" name="aktivitas_saat_ini" id="aktivitas_saat_ini" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control"></input>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('peserta.index') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
