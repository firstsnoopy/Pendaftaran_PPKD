@extends('layouts.base')
@section('title', 'Data PIC')

@section('content')
    <div class="table-reponsive">
        <div align="right" class="mb-3">
            <a href="{{ route('userjurusan.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp


                @foreach ($users as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->levels->nama_level }}</td>
                        <td>
                            @if ($item->id_jurusan == 0)
                                {{ 'none' }}
                            @else
                                {{ $item->jurusans->nama_jurusan }}
                        </td>
                @endif

                <td>
                    <a href="" class="btn btn-primary btn-xs">Edit</a>
                    {{-- <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                    <form class="d-inline" action="{{ route('userjurusan.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
