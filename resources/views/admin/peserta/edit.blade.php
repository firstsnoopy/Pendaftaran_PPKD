@extends('layouts.base')
@section('content')
    <form action="{{ route('peserta.update', $peserta->id) }}" method="post" enctype="multipart/form-data">
        @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
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
            <label for="status">Status</label>
            <select type="text" name="status" id="status" class="form-control" value="">
                <option value="" disable selected>Pilih Status</option>
                <option value="0">Menunggu Wawancara</option>
                <option value="1">Cadangan</option>
                <option value="2">Diterima</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('tentangsaya.index') }}">Back</a>
        </div>
    </form>
@endsection
