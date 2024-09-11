@extends('layouts.base')
@section('content')
    <form action="{{ route('gelombang.update', $gelombang->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="nama_gelombang">Nama Gelombang</label>
            <input type="text" name="nama_gelombang" id="nama_gelombang" class="form-control" value="{{$gelombang->nama_gelombang}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('gelombang.index') }}">Back</a>
        </div>
    </form>
@endsection
