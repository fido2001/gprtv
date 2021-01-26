@extends('backend.app')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Instansi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('instansi.index') }}">Instansi</a></li>
                <li class="breadcrumb-item active">Edit Instansi</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('instansi.update', $instansi->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                            <h3 class="card-title">Data Instansi</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Instansi</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $instansi->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Ubah Data</button>
                            <a href="{{ route('instansi.index') }}" class="btn btn-inverse">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
