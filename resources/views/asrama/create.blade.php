@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-3">Create New Asrama</h2>
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
                <form action="{{ route('asrama.store') }}" method="POST">
                @csrf

                    <div class="form-group mb-3">
                        <label for="nama">Nama Asrama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Ketikan Nama Asrama">
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Asrama</label>
                        <div class="form-check">
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="jenis" value="1">
                                <label class="form-check-label">
                                    Putra
                                </label>
                            </div>
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="jenis" value="0">
                                <label class="form-check-label">
                                    Putri
                                </label>
                            </div>
                        </div>
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