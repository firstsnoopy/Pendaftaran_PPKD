@extends('layouts.base')
@section('content')
    <h1>Level User</h1>

    <form action="{{ route('level.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_level">Nama Level</label>
            <input type="text" name="nama_level" id="nama_level" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('level.index') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
