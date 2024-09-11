@extends('layouts.base')
@section('content')
    <h1>Jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_jurusan">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('jurusan.index') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
