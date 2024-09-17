@extends('layouts.base')
@section('content')
    <h1>Pengguna</h1>

    <div class="card">
        <div class="card-header">Pengguna</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Level Jurusan</th>

                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->levels->nama_level }}


                                        {{ $item->jurusans->nama_jurusan ?? '' }}
                                    </td>

                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center"><a href="{{ route('user.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('user.destroy', $item->id) }}"
                                            onsubmit="return confirm('akan di delete sementara?');" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
