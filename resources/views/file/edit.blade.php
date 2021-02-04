@extends('backend.app')

@section('css')
<link href="{{ URL('/') }}/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{url('/')}}/assets/plugins/dropify/dist/css/dropify.min.css">
<link href="{{ URL('/') }}/assets/plugins/summernote/dist/summernote.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Video</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('video.index') }}">Video</a></li>
                <li class="breadcrumb-item active">Edit Data</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit Video</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('video.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Judul Video</label>
                                        <input type="text" value="{{ $video->title }}" name="title" class="form-control @error('title') is-invalid @enderror">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Kategori</label>
                                        <select name="category_id" class="select2 @error('category_id') is-invalid @enderror" style="width: 100%">
                                            <option disabled selected>Pilih Salah Satu</option>
                                            @foreach ($dataKategori as $kategori)
                                            <option {{ $kategori->id == $video->category_id ? 'selected' : '' }} value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Instansi</label>
                                        <select name="instansi_id" class="select2 @error('instansi_id') is-invalid @enderror" style="width: 100%">
                                            <option disabled selected>Pilih Salah Satu</option>
                                            @foreach ($dataInstansi as $Instansi)
                                            <option {{ $Instansi->id == $video->instansi_id ? 'selected' : '' }} value="{{ $Instansi->id }}">{{ $Instansi->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('instansi_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tags</label>
                                        <select name="tags[]" class="select2 select2-multiple @error('tags') is-invalid @enderror" style="width: 100%" multiple="multiple" data-placeholder="Pilih Tags">
                                            @foreach ($video->tags as $tag)
                                                <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                            @foreach ($dataTag as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('tags')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4 class="card-title">Thumbnail</h4>
                                        <label for="input-file-now">Perhatian! file harus berupa jpg, jpeg, png dan ukuran maksimal 2mb</label>
                                        <input type="file" name="cover" value="{{ $video->cover }}" id="input-file-now" class="dropify @error('cover') is-invalid @enderror"/>
                                        @error('cover')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4 class="card-title">File Video</h4>
                                        <label for="input-file-now">Perhatian! file harus berupa mp4 dan ukuran maksimal 100mb</label>
                                        <input type="file" name="file_video" id="input-file-now" class="dropify @error('file_video') is-invalid @enderror"/>
                                        @error('file_video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Deskripsi</label>
                                        <textarea name="body" class="summernote @error('body') is-invalid @enderror">{{ $video->body }}</textarea>
                                        @error('body')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="{{ route('video.index') }}" class="btn btn-inverse">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
@endsection

@push('custom-js')
<script src="{{ URL('/') }}/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script src="{{ URL('/') }}/assets/plugins/summernote/dist/summernote.min.js"></script>
@endpush

@push('after-js')
<script>
    jQuery(document).ready(function() {
        // For select 2
        $(".select2").select2();
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
</script>
@endpush