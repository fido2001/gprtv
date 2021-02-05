@extends('backend.app')

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Headline</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('headline.index') }}">Headline</a></li>
                <li class="breadcrumb-item active">Edit Headline</li>
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
                    <form action="{{ route('headline.update', $headline->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                            <h3 class="card-title">Data Headline</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Teks</label>
                                        <input type="text" name="tulisan" class="form-control @error('tulisan') is-invalid @enderror" value="{{ $headline->tulisan }}">
                                        @error('tulisan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Ubah Data</button>
                            <a href="{{ route('headline.index') }}" class="btn btn-inverse">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
