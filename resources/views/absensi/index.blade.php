@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Absensi</h2>

                @can('admin')
                <p><a class="btn btn-outline-primary" href="{{ route('absensi.create') }}">Tambah Absensi baru</a></p>
                @endcan
                @if(session()->get('success'))
                <div class="alert alert-success d-flex alingn-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ session()->get('success') }}
                    </div>
                </div>
                @endif
                <table class="table table-striped table-hover caption-top">
                    <caption>Data Absensi Unai</caption>
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">No Kamar</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Kehadiran</th>
                        @can('admin')
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        @endcan
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($absensi as $abs)
                    <tr>
                        <th scope="row">{{ $abs->id }}</th>
                        <td>{{ $abs->tanggal }}</td>
                        <td>{{ $abs->asrama->nama }}</td>
                        <td>{{ $abs->kamar->nokmr }}</td>
                        <td>{{ $abs->mahasiswa->namadpn }}</td>
                        <td>{{ $abs->kehadiran ? 'Hadir' : 'Absen' }}</td>
                        @can('admin')
                        <td><a class="btn btn-outline-warning btn-sm" href="{{ route('absensi.edit', $abs->id) }}">Edit</a> </td>
                        <td>
                            <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('absensi.destroy', $abs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                        @endcan
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection