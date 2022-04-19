@extends('layouts.app')

@section('content')

    <h2>Create New Asrama</h2>
    <form action="{{ route('asrama.store') }}" method="POST">
    @csrf
        <label>Nama Asrama:</label>
        <input name="nama_asrama">
        <br>
        <label>Jenis Asrama:</label>
        <input name="jenis_asrama">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>

@endsection