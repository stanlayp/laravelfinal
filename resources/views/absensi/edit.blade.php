@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-3">Edit absensi</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Something wrong</strong>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
                @csrf
		    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $absensi->tanggal }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Asrama</label>
                        <select class="form-control" name="asrama_id">
                            <option value="">Pilih Asrama</option>
                            @foreach($asrama as $asr)
                                <option value="{{ $asr->id }}" {{ $absensi->asrama_id == $asr->id ? 'selected' : '' }}>
                                    {{ $asr->nama}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>No Kamar</label>
                        <select class="form-control" name="kamar_id">
                            <option value="">Pilih No Kamar</option>
                            @foreach($kamar as $kmr)
                                <option value="{{ $kmr->id }}" {{ $absensi->kamar_id == $kmr->id ? 'selected' : '' }}>
                                    {{ $kmr->nokmr}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Nama Mahasiswa</label>
                        <select class="form-control" name="mahasiswa_id">
                            <option value="">Pilih nama mahasiswa</option>
                            @foreach($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}" {{ $absensi->mahasiswa_id == $mhs->id ? 'selected' : '' }}>
                                    {{ $mhs->namadpn}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Kehadiran</label>
                        <div class="form-check">
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="kehadiran" value="1" {{ $absensi->kehadiran=='1' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Hadir
                                </label>
                            </div>
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="kehadiran" value="0" {{ $absensi->kehadiran=='0' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Absen
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        <button type="reset"  class="btn btn-outline-secondary">Reset</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection