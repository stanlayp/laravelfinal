@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>User</h2>

                <p><a class="btn btn-outline-primary" href="{{ route('user.create') }}">Tambah User baru</a></p>
                @if(session()->get('success'))
                <div class="alert alert-success d-flex alingn-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ session()->get('success') }}
                    </div>
                </div>
                @endif
                <table class="table table-striped table-hover caption-top">
                    <caption>Data User</caption>
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($user as $u)
                    <tr>
                        <th scope="row">{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->password }}</td>
                        <td><a class="btn btn-outline-warning btn-sm" href="{{ route('user.edit', $u->id) }}">Edit</a> </td>
                        <td>
                            <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('user.destroy', $u->id) }}" method="POST">
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