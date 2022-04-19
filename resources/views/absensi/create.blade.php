@extends('layouts.app')

@section('content')

    <h2>Create absensi</h2>
    <form action="{{ route('absensi.store') }}" method="POST">
    @csrf
        <label>Nim:</label>
        <input name="nim">
        <br>
        <label>Taggal:</label>
        <input name="tanggal">
        <br>
        <label>Kehadiran:</label>
        <input name="kehadiran">
        <br>

        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>

@endsection