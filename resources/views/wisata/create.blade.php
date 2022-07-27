@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Objek Wisata
                    </div>
                    <div class="card-body">
                        <form action="{{ route('wisata.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Wisata</label>
                                <input type="text" class="form-control  @error('nama_wisata') is-invalid @enderror"
                                    name="nama_wisata">
                                @error('nama_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Infomasi Objek Wisata</label>
                                <textarea class="form-control  @error('informasi_wisata') is-invalid @enderror" name="informasi_wisata"></textarea>
                                @error('informasi_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi Objek Wisata</label>
                                <textarea class="form-control  @error('lokasi') is-invalid @enderror" name="lokasi"></textarea>
                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
