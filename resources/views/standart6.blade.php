@extends('layouts.app')

@push('pageCss')
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .s6-inputBox {
            width: 100px;
            display: unset;
        }
        .w-50 {
            width: 50px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">STANDART 6</div>
                    <div class="panel-body">
                        {{ Form::open(['url' => route('post_standart6')]) }}
                            <div class="form-group">
                                <label>6.1 &nbsp; Keterlibatan program studi dalam perencanaan target kinerja, perencanaan kegiatan/kerja dan perencanaan alokasi dan pengelolaan dana.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.1', 4, 0, ['required' => 'true']) }} Program studi secara otonom melaksanakan perencanaan alokasi dan pengelolaan dana</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.1', 3) }} Program studi tidak diberi otonomi, tetapi dilibatkan dalam melaksanakan perencanaan alokasi dan pengelolaan dana</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.1', 2) }} Program studi dilibatkan dalam perencanaan alokasi, namun pengelolaan dana dilakukan oleh fakultas/sekolah tinggi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.1', 1) }} Program studi hanya diminta untuk memberikan masukan. Perencanaan alokasi dan pengelolaan dana dilakukan oleh fakultas/sekolah tinggi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.1', 0) }} Program studi tidak dilibatkan dalam perencanaan/alokasi dan pengelolaan dana</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.2.1 &nbsp; Pengunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).</label>
                            </div>
                            <div class="form-group">
                                <label>6.2.2 &nbsp; Dana penelitian dalam tiga tahun terakhir</label>
                            </div>
                            <div class="form-group">
                                <label>6.2.3 &nbsp; Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir</label>
                            </div>
                            <div class="form-group">
                                <label>6.3.1 &nbsp; Luas ruang kerja dosen.</label>
                            </div>
                            <div class="form-group">
                                <label>6.3.2 &nbsp; Prasarana (kantor, ruang kelas, ruang laboratorium, studi, ruang perpustakaan, kebun percobaan, dsb. kecuali ruang dosen) yang dipergunakan PS dalam proses pembelajaran.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.2', 4, 0, ['required' => 'true']) }} Prasarana lengkap dan mutunya sangat baik untuk proses pembelajaran</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.2', 3) }} Prasarana lengkap dan mutunya baik untuk proses pembelajaran</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.2', 2) }} Prasarana cukup lengkap dan mutunya cukup untuk proses pembelajaran</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.2', 1) }} Prasarana kurang lengkap dan mutunya kurang baik</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.2', 0) }} Tidak ada nilai</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.3.3 &nbsp; Prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik)</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.3', 4, 0, ['required' => 'true']) }} Prasarana penunjang lengkap dan mutunya sangat baik untuk memenuhi kebutuhan mahasiswa</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.3', 3) }} Prasarana penunjang lengkap dan mutunya baik untuk memenuhi kebutuhan mahasiswa</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.3', 2) }} Prasana penunjang cukup lengkap dan mutunya cukup untuk memenuhi kebutuhan mahasiswa</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.3', 1) }} Prasarana penunjang kurang lengkap dan mutunya kurang baik</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.3.3', 0) }} Tidak ada prasarana penunjang</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.4.1.a &nbsp; Bahan pustaka berupa buku teks</label>
                            </div>
                            <div class="form-group">
                                <label>6.4.1.b &nbsp; Bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</label>
                            </div>
                            <div class="form-group">
                                <label>6.4.1.c &nbsp; Bahan pustaka berupa jurnal ilmiah terakreditasi dikti</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1c', 4, 0, ['required' => 'true']) }} &ge; 3 judul jurnal, nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1c', 3) }} 2 judul jurnal, nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1c', 2) }} 1 judul jurnal, nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1c', 1) }} Tidak ada jurnal yang nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1c', 0) }} Tidak memiliki jurnal terakreditasi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.4.1.d &nbsp; Bahan pustaka berupa jurnal ilmiah internasional</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1d', 4, 0, ['required' => 'true']) }} &ge; 2 judul jurnal, nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1d', 3) }} 1 judul jurnal yang nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1d', 2) }} Tidak ad jurnal yang nomornya lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1d', 1) }} Tidak ada nilai</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.1d', 0) }} Tidak ada nilai</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.4.1.e &nbsp; Bahan pustaka berupa prosiding seminar dalam tiga tahun terakhir</label>
                            </div>
                            <div class="form-group">
                                <label>6.4.2 &nbsp; Akses ke perpustakaan diluar PT atau sumber pustaka lainnya</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.2', 4, 0, ['required' => 'true']) }} Ada beberapa perpustakaan diluar PT yang dapat diakses dan sangat baik fasilitasnya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.2', 3) }} Ada perpustakaan di luar PT yang dapat diakses dan baik fasilitasnya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.2', 2) }} Ada perpustakaan di luar PT yang dapat diakses dan cukup baik fasilitasnya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.2', 1) }} Tidak ada perpustakaan di luar PT yang dapat diakses</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.2', 0) }} Tidak ada nilai</label>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
