@extends('layouts.base')
@section('content')
    <form action="{{ route('level.update', $level->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="nama_level">Nama Level</label>
            <input type="text" name="nama_level" id="nama_level" class="form-control" value="{{$level->nama_level}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('level.index') }}">Back</a>
        </div>
    </form>
@endsection
