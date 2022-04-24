@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-3">Create new Kamar</h2>
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
                <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
                @csrf
                @method('PUT')

                    <div class="form-group mb-3">
                        <label for="lantai">Lantai</label>
                        <input type="text" class="form-control" name="lantai" id="lantai" value="{{ $kamar->lantai }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nokmr">No Kamar</label>
                        <input type="text" class="form-control" name="nokmr" id="nokmr" value="{{ $kamar->nokmr }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Jumlah Penguni</label>
                        <select class="form-control" name="jmlhpng">
                            <option value="">Pilih Jumlah penghuni</option>
                            <option value="1" {{ $kamar->jmlhpng == '1' ? 'selected' : '' }}>1</option>
            			    <option value="2" {{ $kamar->jmlhpng == '2' ? 'selected' : '' }}>2</option>
                			<option value="3" {{ $kamar->jmlhpng == '3' ? 'selected' : '' }}>3</option>
                			<option value="4" {{ $kamar->jmlhpng == '4' ? 'seledted' : '' }}>4</option>
                        </select>
                    </div>
                    <hr class="mb-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection