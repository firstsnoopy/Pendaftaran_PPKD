@extends('layouts.base')
@section('content')
    <form action="{{ route('user.update', $tentang_Saya->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{$user->nama_lengkap}}">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('user.index') }}">Back</a>
        </div>
    </form>
@endsection
