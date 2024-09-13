@extends('layouts.base')
@section('content')
    <h1>
        Pendaftar</h1>

    <div class="card">
        <div class="card-header">Pendaftar</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('peserta.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jurusan</th>
                                <th>Gelombang</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->jurusan->nama_jurusan }}</td>
                                    <td>{{ $item->gelombang->nama_gelombang }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if ($item->status == 0)
                                            <span class="badge bg-primary">Menunggu Wawancara</span>
                                        @elseif ($item->status == 1)
                                            <span class="badge bg-warning">Cadangan</span>
                                        @elseif($item->status == 2)
                                            <span class="badge bg-success">Diterima</span>
                                        @endif
                                    </td>

                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center">
                                        <a href="{{ route('peserta.show', $item->id) }}"
                                            class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{ route('peserta.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('peserta.destroy', $item->id) }}"
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
