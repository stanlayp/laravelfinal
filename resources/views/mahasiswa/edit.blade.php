@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-3">Create new Mahasiswa</h2>
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
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
		        @method('PUT')

                    <div class="form-group mb-3">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="{{ $mahasiswa->nim }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="namadpn">Nama Depan</label>
                        <input type="text" class="form-control" name="namadpn" id="namadpn" value="{{ $mahasiswa->namadpn }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="namablkng">Nama Belakang</label>
                        <input type="text" class="form-control" name="namablkng" id="namablkng" value="{{ $mahasiswa->namablkng }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nohp">Contact</label>
                        <input type="text" class="form-control" name="nohp" id="nohp" value="{{ $mahasiswa->nohp }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ $mahasiswa->jurusan }}">
                    </div>
                    <hr class="mb-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection