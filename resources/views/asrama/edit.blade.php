@extends('layouts.app')

@section('content')

    <h2>Edit Asrama</h2>
        <form action="{{ route('asrama.update', $asrama->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nama Asrama:</label>
            <input name="nama_asrama" value="{{ $asrama->nama_asrama }}"><br>

            <label>Jenis Asrama:</label>
            <input name="jenis_asrama" value="{{ $asrama->jenis_asrama }}"><br>
            
            <button type="submit">Save</button>
            <button type="reset">Reset</button>
        </form>
        
@endsection