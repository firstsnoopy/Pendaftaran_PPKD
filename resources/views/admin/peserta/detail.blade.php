@extends('layouts.base')
@section('content')
<div class="mt-5">
    <h2 class="text-center mb-4 text-primary">Data Lengkap Pendaftar</h2>

    <div class="card border-primary mb-3">
        <h5 class="card-title mb-0">Informasi Peserta</h5>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Jurusan</strong>
                <span class="badge bg-info text-white">{{$peserta->jurusan->nama_jurusan}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Gelombang</strong>
                <span class="badge bg-info text-white">{{$peserta->gelombang->nama_gelombang}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Nama Lengkap</strong>
                <span class="badge bg-info text-white">{{$peserta->nama_lengkap}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>NIK</strong>
                <span class="badge bg-info text-white">{{$peserta->nik}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Kartu Keluarga</strong>
                <span class="badge bg-info text-white">{{$peserta->kartu_keluarga}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Jenis Kelamin</strong>
                <span class="badge bg-info text-white">{{$peserta->jenis_kelamin}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Tempat Lahir</strong>
                <span class="badge bg-info text-white">{{$peserta->tempat_lahir}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Tanggal Lahir</strong>
                <span class="badge bg-info text-white">{{$peserta->tanggal_lahir}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Pendidikan Terakhir</strong>
                <span class="badge bg-info text-white">{{$peserta->pendidikan_terakhir}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Nama Sekolah</strong>
                <span class="badge bg-info text-white">{{$peserta->nama_sekolah}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Kejuruan</strong>
                <span class="badge bg-info text-white">{{$peserta->kejuruan}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Email</strong>
                <span class="badge bg-info text-white">{{$peserta->email}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Nomor Telepon</strong>
                <span class="badge bg-info text-white">{{$peserta->nomor_hp}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Aktifitas</strong>
                <span class="badge bg-info text-white">{{$peserta->aktivitas_saat_ini}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>Status</strong>
                <span class="badge bg-info text-white">{{$peserta->status}}</span>
            </li>
        </ul>
    </div>
</div>

        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route('peserta.index') }}">Back</a>
        </div>
    </form>
@endsection
