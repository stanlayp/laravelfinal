@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Mahasiswa</h2>

                <p><a class="btn btn-outline-primary" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa baru</a></p>
                @if(session()->get('success'))
                <div class="alert alert-success d-flex alingn-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ session()->get('success') }}
                    </div>

                </div>
                @endif
                <table class="table table-striped table-hover caption-top">
                    <caption>Data Mahasiswa</caption>
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $mhs->id }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->namadpn }}</td>
                        <td>{{ $mhs->namablkng }}</td>
                        <td>{{ $mhs->nohp }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td><a class="btn btn-outline-warning btn-sm" href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a> </td>
                        <td>
                            <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection