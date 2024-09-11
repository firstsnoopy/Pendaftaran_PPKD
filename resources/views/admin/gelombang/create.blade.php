@extends('layouts.base')
@section('content')
    <h1>Gelombang Pendaftaran</h1>

    <form action="{{ route('gelombang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_gelombang">Nama Gelombang</label>
            <input type="text" name="nama_gelombang" id="nama_gelombang" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah Gelombang</button>
            <a href="{{ url('gelombang.index') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
