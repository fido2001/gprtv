@extends('frontend.app')

@section('content')
    <div class="container">
        <h3 class="my-3">Jadwal Acara</h3>
        <div>
            <ul>
                <li id="hari-senin" class="genric-btn info radius">Senin</li>
                <li id="hari-selasa" class="genric-btn info-border radius">Selasa</li>
                <li id="hari-rabu" class="genric-btn info-border radius">Rabu</li>
                <li id="hari-kamis" class="genric-btn info-border radius">Kamis</li>
                <li id="hari-jumat" class="genric-btn info-border radius">Jumat</li>
                <li id="hari-sabtu" class="genric-btn info-border radius">Sabtu</li>
                <li id="hari-minggu" class="genric-btn info-border radius">Minggu</li>
            </ul>
        </div>
        <div class="list-senin" class="progress-table-wrap">
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
        <div class="list-selasa" class="progress-table-wrap">
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
        <div class="list-rabu" class="progress-table-wrap">
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
        <div class="list-kamis" class="progress-table-wrap">
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
        <div class="list-jumat" class="progress-table-wrap">
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
        <div class="list-sabtu" class="progress-table-wrap">
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
        <div class="list-minggu" class="progress-table-wrap">
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