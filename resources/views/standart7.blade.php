@extends('layouts.app')

@push('pageCss')
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .pointer {
            cursor: pointer;
        }
        .s7-inputBox {
            width: 125px;
            display: unset;
        }
        .w-50 {
            width: 50px;
        }
        .w-75 {
            width: 75px;
        }
        .s7-col-title {
            width: 50%;
            text-align: center;
            vertical-align: middle !important;
        }
        .s7-col-check {
            width: 12.5%;
            vertical-align: middle !important;
        }
    </style>
@endpush
@section('content')
    <div class="loader" id="loader-page"></div>

    <div class="container" style="display: none;" id="container-st7">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading display-flex">
                        <h3 class="d-flex-2"><strong>STANDAR 7</strong></h3>
                        <div class="d-flex-1 text-right btn-title">
                            <a href="{{ route('menu') }}" class="btn btn-default hvr-icon-drop">Menu</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(['url' => route('post_standart7')]) }}
                            <div class="form-group">
                                <label>7.1.1 &nbsp; Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama 3 tahun.</label>
                                <p>Jumlah penelitian dengan biaya luar negeri yang sesuai bidang ilmu
                                    <input type="number" name="7.1.1a" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                                <p>Jumlah penelitian dengan biaya luar yang sesuai bidang ilmu
                                    <input type="number" name="7.1.1b" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                                <p>Jumlah penelitian dengan biaya dari PT/sendiri yang sesuai bidang ilmu
                                    <input type="number" name="7.1.1c" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>7.1.2 &nbsp; Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen.</label>
                                <p>Banyaknya mahasiswa Program Studi yang ikut serta dalam penelitian dosen adalah
                                    <input type="number" name="7.1.2ikt" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0">
                                    orang, dari 
                                    <input type="number" name="7.1.2tot" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="1">
                                    mahasiswa yang melakukan tugas akhir memalui skripsi.
                                </p>
                                <small><i>Note: Biarkan kosong jika tidak ada yang mahasiswa yang terlibat dalam penelitian dosen dalam tiga tahun terakhir</i>.</small>
                            </div>
                            <div class="form-group">
                                <label>7.1.3 &nbsp; Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan Program Studi, selama 3 tahun</label>
                                <p>Banyaknya dosen pada tingkat lokal
                                    <input type="number" name="7.1.3c" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                                <p>Banyaknya dosen pada tingkat nasional
                                    <input type="number" name="7.1.3b" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                                <p>Banyaknya dosen pada tingkat internasional
                                    <input type="number" name="7.1.3a" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>7.1.4 &nbsp; Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('7.1.4', 4, 0, ['required' => 'true']) }}2 atau lebih karya yang memperoleh HaKI<label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.1.4', 3) }}1 yang memperoleh HaKI</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.1.4', 2) }}Tidak ada karya dosen tetap yang memperoleh HaKI</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>7.2.1 &nbsp; Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan Program Studi selama tiga tahun.</label>
                                <p>Jumlah kegiatan PkM dengan biaya luar negeri yang sesuai bidang ilmu
                                    <input type="number" name="7.2.1a" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                                <p>Jumlah kegiatan PkM dengan biaya luar yang sesuai bidang ilmu
                                    <input type="number" name="7.2.1b" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                                <p>Jumlah kegiatan PkM dengan biaya dari PT/sendiri yang sesuai bidang ilmu
                                    <input type="number" name="7.2.1c" class="form-control s7-inputBox w-75" placeholder="Jumlah" min="0" required>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>7.2.2 &nbsp; Keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('7.2.2', 4, 0, ['required' => 'true']) }}Mahasiswa terlibat penuh dan diberi tanggung jawab.<label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.2.2', 3) }}Mahasiwa terlibat penuh, namun tanngung jawab ada pada dosen Pembina.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.2.2', 2) }}Mahasiswa hanya diminta sebagai tenaga pembantu.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.2.2', 1) }}Keterlibatan mahasiswa sangat kurang.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.2.2', 0) }}Mahasiswa tidak dilibatkan dalam kegiatan PkM.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>7.3.1 &nbsp; Kegiatan kerjasama dengan instansi di dalam negeri dalam tiga tahun terakhir.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.1', 4, 0, ['required' => 'true']) }}Ada kerjasama dengan institusi di dalam negeri, banyak dalam jumlah. Semuanya besar relevan dengan bidang keahlian PS.<label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.1', 3) }}Ada kerjasama dengan institusi di dalam negeri, cukup dalam jumlah. Sebagian besar relevan dengan bidang keahlian PS.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.1', 2) }}Ada kerjasama dengan institusi di dalam negeri, kurang dalam jumlah. Sebagian besar relevan dengan bidang keahlian PS.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.1', 1) }}Belum ada atau tidak ada kerjasama.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>7.3.2 &nbsp; Kegiatan kerjasama dengan instansi di luar negeri dalam tiga tahun terakhir.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.2', 4, 0, ['required' => 'true']) }}Ada kerjasama dengan institusi di luar negeri, banyak dalam jumlah. Semuanya besar relevan dengan bidang keahlian PS.<label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.2', 3) }}Ada kerjasama dengan institusi di luar negeri, cukup dalam jumlah. Sebagian besar relevan dengan bidang keahlian PS.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.2', 2) }}Ada kerjasama dengan institusi di luar negeri, kurang dalam jumlah. Sebagian besar relevan dengan bidang keahlian PS.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('7.3.2', 1) }}Belum ada atau tidak ada kerjasama.</label>
                                </div>
                            </div>
                            <div id="hidden"></div>
                            {{ Form::submit('LIHAT TOTAL SKOR', ['class' => 'btn btn-block btn-success']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('pageJs')
    <script type="text/javascript">
        var hasil = {!! json_encode($hasil) !!}
        var value = {!! json_encode($value) !!}

        if (hasil || value) {
          localStorage.nilaiStandart7 = hasil;
          localStorage.setItem('value7', JSON.stringify(value));
          window.location.href = '{{ route('menu') }}';
        } else {
            appendData();
        }

        $('#backTo').click(function() {
            window.location.href = '{{ route('standart4') }}';
        })

        function appendData() {
            var dataS4 = localStorage.value4;
            if (!dataS4) {
                $('#btn_submit').hide();
                $('#content-text').text('Data standar 4 kosong, perlu di isi sebelum melanjutkan pengisian!!!');
                return $('#warningModal').modal();
                // alert('Standart 4 perlu di isi terlebih dahulu!!');
                // return window.location.href = '{{ route("standart4") }}';
            } else {
                dataS4 = JSON.parse(dataS4);
                setTimeout(function() {
                    $('#loader-page').css('display', 'none');
                    $('#container-st7').css('display', 'block');
                }, 500);
                $('#hidden').append('<input type="hidden" name="dosen" value="'+ dataS4.dosen +'"/>');
            }
        }
    </script>
@endpush
