@extends('layouts.app')

@section('content')

    <h2>Create Kamar</h2>
    <form action="{{ route('kamar.store') }}" method="POST">
    @csrf
        <label>Id asrama:</label>
        <input name="id_asrama">
        <br>
        <label>Lantai:</label>
        <input name="lantai">
        <br>
        <label>No Kamar:</label>
        <input name="no_kamar">
        <br>
        <label>Jumlah Penhuni:</label>
        <input name="jmlh_penghuni">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
@endsection