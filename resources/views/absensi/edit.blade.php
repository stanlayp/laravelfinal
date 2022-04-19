@extends('layouts.app')

@section('content')

    <h2>Edit Admin</h2>
    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nim:</label>
        <input name="nim" value="{{ $absensi->nim }}"><br>

        <label>Tanggal:</label>
        <input name="tanggal" value="{{ $absensi->tanggal }}"><br>

        <label>Kehadiran:</label>
        <input name="kehadiran" value="{{ $absensi->kehadiran }}"><br>
       
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
    </form>
@endsection