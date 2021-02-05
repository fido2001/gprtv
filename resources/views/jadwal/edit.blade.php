@extends('backend.app')

@section('css')
<link href="{{ URL('/') }}/assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<link href="{{ URL('/') }}/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Jadwal Acara</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('jadwal.index') }}">Jadwal Acara</a></li>
                <li class="breadcrumb-item active">Edit Data</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit Jadwal Acara</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Hari</label>
                                        <select name="hari" class="select2 @error('hari') is-invalid @enderror" style="width: 100%">
                                            <option disabled selected>Pilih Salah Satu</option>
                                            <option {{ 'Senin' == $jadwal->hari ? 'selected' :'' }} value="Senin">Senin</option>
                                            <option {{ 'Selasa' == $jadwal->hari ? 'selected' :'' }} value="Selasa">Selasa</option>
                                            <option {{ 'Rabu' == $jadwal->hari ? 'selected' :'' }} value="Rabu">Rabu</option>
                                            <option {{ 'Kamis' == $jadwal->hari ? 'selected' :'' }} value="Kamis">Kamis</option>
                                            <option {{ 'Jumat' == $jadwal->hari ? 'selected' :'' }} value="Jumat">Jumat</option>
                                            <option {{ 'Sabtu' == $jadwal->hari ? 'selected' :'' }} value="Sabtu">Sabtu</option>
                                            <option {{ 'Minggu' == $jadwal->hari ? 'selected' :'' }} value="Minggu">Minggu</option>
                                        </select>
                                        @error('hari')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Acara</label>
                                        <input type="text" name="acara" value="{{ $jadwal->acara }}" class="form-control @error('acara') is-invalid @enderror">
                                        @error('acara')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="m-t-40">Mulai Acara</label>
                                        <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" name="mulai" value="{{ $jadwal->mulai }}" class="form-control @error('mulai') is-invalid @enderror"> <span class="input-group-addon"> <span class="fa fa-clock-o"></span> </span>
                                            @error('mulai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="m-t-40">Selesai Acara</label>
                                        <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" name="selesai" value="{{ $jadwal->selesai }}" class="form-control @error('selesai') is-invalid @enderror" name="selesai"> <span class="input-group-addon"> <span class="fa fa-clock-o"></span> </span>
                                            @error('selesai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                            <a href="{{ route('jadwal.index') }}" class="btn btn-inverse">Kembali</a>
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
<script src="{{ URL('/') }}/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<script src="{{ URL('/') }}/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
@endpush

@push('after-js')
<script>
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
</script>
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
@endpush
