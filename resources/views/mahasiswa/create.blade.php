@extends('layouts.app')

@section('content')

    <h2>Create Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
        <label>Nim:</label>
        <input name="nim">
        <br>
        <label>Id Kamar:</label>
        <input name="id_kamar">
        <br>
        <label>Nama Depan:</label>
        <input name="nama_depan">
        <br>
        <label>Nama Belakang:</label>
        <input name="nama_belakang">
        <br>
        <label>Contact:</label>
        <input name="no_hp">
        <br>
        <label>Jurusan:</label>
        <input name="jurusan">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
@endsection