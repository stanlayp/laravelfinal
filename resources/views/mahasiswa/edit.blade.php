@extends('layouts.app')

@section('content')

    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nim:</label>
        <input name="nim" value="{{ $mahasiswa->nim }}"><br>

        <label>Id Kamar:</label>
        <input name="id_kamar" value="{{ $mahasiswa->id_kamar }}"><br>

        <label>Nama Depan:</label>
        <input name="nama_depan" value="{{ $mahasiswa->nama_depan }}"><br>

        <label>Nama Belakang:</label>
        <input name="nama_belakang" value="{{ $mahasiswa->nama_belakang }}"><br>
        
        <label>Contact:</label>
        <input name="no_hp" value="{{ $mahasiswa->no_hp }}"><br>

        <label>Jurusan:</label>
        <input name="jurusan" value="{{ $mahasiswa->jurusan }}"><br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
@endsection