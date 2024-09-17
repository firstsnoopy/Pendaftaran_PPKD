@extends('layouts.base')
@section('title', 'Tambah PIC')

@section('content')
    <form action="{{ route('userjurusan.store') }}" method="post">
        @csrf

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Level *</label>
            </div>
            <div class="col-sm-3">
                <select name="id_level" class="form-control" id="">
                    <option value="">Pilih Level</option>

                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Jurusan *</label>
            </div>
            <div class="col-sm-3">
                <select name="id_jurusan" class="form-control" id="">
                    <option value="">Pilih Jurusan</option>

                    @foreach ($jurusan as $jur)
                        <option value="{{ $jur->id }}">{{ $jur->nama_jurusan}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
