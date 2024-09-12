@extends('layouts.base')
@section('content')
    <form action="{{ route('peserta.update', $peserta->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                value="{{ $peserta->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label for="NIK">Nomor Induk Kependudukan</label>
            <input type="number" name="nik" id="nik" class="form-control" value="{{ $peserta->nik }}">
        </div>
        <div class="mb-3">
            <label for="kartu_keluarga">Kartu Keluarga</label>
            <input type="file" name="kartu_keluarga" id="kartu_keluarga" class="form-control"
                value="{{ $peserta->kartu_keluarga }}">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                value="{{ $peserta->jenis_kelamin }}">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                value="{{ $peserta->tempat_lahir }}">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                value="{{ $peserta->tanggal_lahir }}">
        </div>
        <div class="mb-3">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control"
                value="{{ $peserta->pendidikan_terakhir }}">
        </div>
        <div class="mb-3">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control"
                value="{{ $peserta->nama_sekolah }}">
        </div>
        <div class="mb-3">
            <label for="kejuruan">Kejuruan</label>
            <input type="text" name="kejuruan" id="kejuruan" class="form-control" value="{{ $peserta->kejuruan }}">
        </div>
        <div class="mb-3">
            <label for="nomor_hp">Nomor Telepon</label>
            <input type="number" name="nomor_hp" id="nomor_hp" class="form-control" value="{{ $peserta->nomor_hp }}">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $peserta->email }}">
        </div>
        <div class="mb-3">
            <label for="aktivitas_saat_ini">Aktivitas</label>
            <input type="text" name="aktivitas_saat_ini" id="aktivitas_saat_ini" class="form-control"
                value="{{ $peserta->kejuruan }}">
        </div>
        <div class="mb-3">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $peserta->status }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('tentangsaya.index') }}">Back</a>
        </div>
    </form>
@endsection
