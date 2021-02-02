@extends('frontend.app')

@section('content')
    <div class="container">
        <h3 class="my-3">Jadwal Acara</h3>
        <?php $tgl = Carbon\Carbon::now();
        $hari = Carbon\Carbon::parse($tgl)->translatedFormat("l"); ?> 
        <div class="mobile-ver">
            <select id="days-selector" class="form-control">
                <option value="list-senin" {{ $hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                <option value="list-selasa" {{ $hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                <option value="list-rabu" {{ $hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                <option value="list-kamis" {{ $hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                <option value="list-jumat" {{ $hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                <option value="list-sabtu" {{ $hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                <option value="list-minggu" {{ $hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
            </select>
        </div>
        <div class="desktop">
            <ul>
                <li id="hari-senin" class="{{ $hari == 'Senin' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Senin</li>
                <li id="hari-selasa" class="{{ $hari == 'Selasa' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Selasa</li>
                <li id="hari-rabu" class="{{ $hari == 'Rabu' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Rabu</li>
                <li id="hari-kamis" class="{{ $hari == 'Kamis' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Kamis</li>
                <li id="hari-jumat" class="{{ $hari == 'Jumat' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Jumat</li>
                <li id="hari-sabtu" class="{{ $hari == 'Sabtu' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Sabtu</li>
                <li id="hari-minggu" class="{{ $hari == 'Minggu' ? 'genric-btn info radius' : 'genric-btn info-border radius' }}">Minggu</li>
            </ul>
        </div>
        <div id="list-senin" class="days progress-table-wrap" style="display:{{ $hari == 'Senin' ? 'block' : 'none' }}" >
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Senin</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
        <div id="list-selasa" class="days progress-table-wrap" style="display:{{ $hari == 'Selasa' ? 'block' : 'none' }}">
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Selasa</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang Selasa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati Selasa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
        <div id="list-rabu" class="days progress-table-wrap" style="display:{{ $hari == 'Rabu' ? 'block' : 'none' }}">
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Rabu</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang Rabu</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati Rabu</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
        <div id="list-kamis" class="days progress-table-wrap" style="display:{{ $hari == 'Kamis' ? 'block' : 'none' }}">
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Kamis</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang Kamis</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati Kamis</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
        <div id="list-jumat" class="days progress-table-wrap" style="display:{{ $hari == 'Jumat' ? 'block' : 'none' }}">
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Jumat</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang Jumat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati Jumat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
        <div id="list-sabtu" class="days progress-table-wrap" style="display:{{ $hari == 'Sabtu' ? 'block' : 'none' }}">
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Sabtu</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang Sabtu</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati Sabtu</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
        <div id="list-minggu" class="days progress-table-wrap" style="display:{{ $hari == 'Minggu' ? 'block' : 'none' }}">
            <div class="progress-table" style="min-width: 370px">
                <h4>Hari Minggu</h4>
                <div class="table-head">
                    {{-- <div class="serial">#</div> --}}
                    <div class="country" style="width: 30%">Jam</div>
                    <div class="visit" style="width: 70%">Program Acara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">00:30 - 02:00</div>
                    <div class="visit" style="width: 70%">Hiburan Wayang Minggu</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">02:00 - 03:00</div>
                    <div class="visit" style="width: 70%">Talkshow - Jejak Ki Djati Minggu</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:00 - 03:30</div>
                    <div class="visit" style="width: 70%">Antara TV</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">03:30 - 04:00</div>
                    <div class="visit" style="width: 70%">Dokementer - Pesona Desa</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:00 - 04:25</div>
                    <div class="visit" style="width: 70%">Hikayat</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:25 - 04:30</div>
                    <div class="visit" style="width: 70%">INDONESIA RAYA</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">04:30 - 05:00</div>
                    <div class="visit" style="width: 70%">Video Grafis IB</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:00 - 05:30</div>
                    <div class="visit" style="width: 70%">Talkshow - Juru Bicara</div>
                </div>
                <div class="table-row">
                    {{-- <div class="serial">01</div> --}}
                    <div class="country" style="width: 30%">05:30 - 06:30</div>
                    <div class="visit" style="width: 70%">Anak - Kanal Dongeng</div>
                </div>
            </div>
        </div>
    </div>
@endsection