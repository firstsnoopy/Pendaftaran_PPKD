@extends('layouts.base')
@section('content')
    <h1>Pengguna</h1>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="" class="form-label">Level</label>
            <div class="col-sm-3">
                <select name="id_level" class="form-control" id="">
                    <option value="">Pilih Level</option>

                    @foreach ($level as $lvl)
                        <option value="{{ $lvl->id }}">{{ $lvl->nama_level }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- @if ($level->id == 3) --}}
        <div class="mb-3 row">
            <div class="col-sm-3">
                <label for="jurusan">Jurusan</label>
                <select name="id_jurusan" class="form-control" id="">
                    <option value="">Pilih Jurusan</option>
                    <option value="0">None</option>
                    @foreach ($jurusan as $jur)
                        <option value="{{ $jur->id }}">{{ $jur->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- @endif --}}
        <div class="mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('user.index') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
