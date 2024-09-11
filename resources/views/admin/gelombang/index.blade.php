@extends('layouts.base')
@section('content')
    <h1>Gelombang Pendaftaran</h1>

    <div class="card">
        <div class="card-header">Gelombang Pendaftaran</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('gelombang.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Gelombang</th>
                                <th>Aktif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gelombang as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_gelombang }}</td>
                                    <td>
                                        <input type="radio" class="status-radio" name="aktif"
                                            data-id="{{ $item->aktif }}">
                                    </td>
                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center"><a href="{{ route('gelombang.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('gelombang.destroy', $item->id) }}"
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
