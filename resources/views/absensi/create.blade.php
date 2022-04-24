<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-3">Create absensi</h2>
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
                <form action="{{ route('absensi.store') }}" method="POST">
                @csrf

                    <div class="form-group mb-3">
                        <label for="tanggal">Taggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal">
                    </div>

                    <div class="form-group mb-3">
                        <label>Asrama</label>
                        <select class="form-control chosen" name="asrama_id">
                            <option value="">Pilih Asrama</option>
                            @foreach($asrama as $asr)
                                <option value="{{ $asr->id }}">
                                    {{ $asr->nama}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>No Kamar</label>
                        <select class="form-control chosen" name="kamar_id">
                            <option value="">Pilih No Kamar</option>
                            @foreach($kamar as $kmr)
                                <option value="{{ $kmr->id }}">
                                    {{ $kmr->nokmr}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Nama Mahasiswa</label>
                        <select class="form-control chosen" name="mahasiswa_id">
                            <option value="">Pilih nama mahasiswa</option>
                            @foreach($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}">
                                    {{ $mhs->namadpn}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <script type="text/javascript">
                        $(".chosen").chosen();

                    </script>

                    <div class="form-group mb-3">
                        <label>Kehadiran</label>
                        <div class="form-check">
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="kehadiran" value="1">
                                <label class="form-check-label">
                                    Hadir
                                </label>
                            </div>
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="kehadiran" value="0">
                                <label class="form-check-label">
                                    Absen
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        <button type="reset"  class="btn btn-outline-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection