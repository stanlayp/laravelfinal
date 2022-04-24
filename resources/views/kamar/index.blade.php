@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Kamar</h2>

                <p><a class="btn btn-outline-primary" href="{{ route('kamar.create') }}">Tambah Kamar baru</a></p>
                @if(session()->get('success'))
                <div class="alert alert-success d-flex alingn-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ session()->get('success') }}
                    </div>
                </div>
                @endif
                <table class="table table-striped table-hover caption-top">
                    <caption>Data Kamar Asrama</caption>
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Lantai</th>
                        <th scope="col">No Kamar</th>
                        <th scope="col">Jumlah Penghuni</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($kamar as $kmr)
                    <tr>
                        <th scope="row">{{ $kmr->id }}</th>
                        <td>{{ $kmr->lantai }}</td>
                        <td>{{ $kmr->nokmr }}</td>
                        <td>{{ $kmr->jmlhpng }}</td>
                        <td><a class="btn btn-outline-warning btn-sm" href="{{ route('kamar.edit', $kmr->id) }}">Edit</a> </td>
                        <td>
                            <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('kamar.destroy', $kmr->id) }}" method="POST">
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