@extends('layouts.app')

@push('pageCss')
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .s5-inputBox {
            width: 100px;
            display: unset;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">STANDART 5</div>
                    <div class="panel-body">
                        {{ Form::open(['url' => route('post_standart5')]) }}
                            <div class="form-group">
                                <label>5.1.1.a &nbsp; Kelengkapan dan perumusan kompetensi atau struktu kurikulum (harus memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan launnya).</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1a', 4, 0, ['required' => 'true']) }} Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainya) yang terumuskan secara sangat jelas</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1a', 3) }} Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumus secara jelas</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1a', 2) }} Kurikulum memuat kompetensi ukusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara cukup jelas</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1a', 1) }} Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) namun rumusannya kurang jelas</label>
                                </div>
                                <div class="radio">
                                    <label>{{ form::radio('5.1.1a', 0) }} Kurikulum tidak memuat kompetensi lulusan secara lengkap</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.1.1.b &nbsp; Orientasi dan kesesuaian kurikulum dengan visi dan misi Program Studi</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1b', 4, 0, ['required' => 'true']) }} Sesuai dengan visi-misi, sudah berorientasi ke masa depan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1b', 3) }} Sesuai dengan visi-misi, berorientasi ke masa kini</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1b', 2) }} Sesuai dengan visi-misi, tetapi masih berorientasi ke masa lalu</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1b', 1) }} Tidak sesuai dengan visi-misi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.1b', 0) }}Tidak sesuai dengan visi-misi serta tidak jelas orientasinya atau tidak memuat-memuat standar kompetensi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.1.2.a &nbsp; Kesesuaian matakuliah dan urutannya dengan standar kompetensi</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.2a', 4, 0, ['required' => 'true']) }} Sesuai dengan standar kompetensi, sudah berorientasi ke masa depan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.2a', 3) }} Sesuai dengan standar kompetensi, berorientasi ke masa kini</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.2a', 2) }} Sesuai dengan standar kompetensi, tetapi masih berorientasi ke masa lalu</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.2a', 1) }} Tidak sesuai dengan standar kompetensi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.2a', 0) }} Tidak memiliki standar kompetensi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.1.2.b &nbsp; Persentase mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas(prektikum/praktek, PR atau makalah) &ge; 20%</label>
                                <p>Jumlah seluruh matakuliah wajib dan pilihan
                                    <input type="number" name="5.1.2b" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required />
                                </p>
                                <p>Jumlah matakuliah yang memiliki bobot tugas
                                    <input type="number" name="5.1.2bbbt" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required />
                                </p>
                            </div>
                            <div class="form-group">
                                <label>5.1.2.c &nbsp; Matakuliah yang dilengkapi dengan deskripsi matakuliah, silabus, dan SAP.</label>
                                <p>Jumlah matkul yang dilengkapi dengan deskripsi matakuliah, silabus, dan SAP
                                    <input type="number" name="5.1.2c" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required />
                                </p>
                            </div>
                            <div class="form-group">
                                <label>5.1.3 &nbsp; Fleksibilitas mata kuliah pilihan (Matakuliah yang dilaksanakan tiga tahun terakhir)</label>
                                <p>Jumlah matakuliah
                                    <input type="number" name="5.1.3" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required /> sks
                                </p>
                                <p>Jumlah matakuliah yang harus diambil
                                    <input type="number" name="5.1.2get" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required /> sks
                                </p>
                                <small><i>Note: Bagi Program Studi yang memiliki jalur pilihan/peminatan/konsentrasi dianggap sebagai mata kuliah pilihan</i></small><br/>
                            </div>
                            <div class="form-group">
                                <label>5.1.4 &nbsp; Substansi praktikum dan pelaksanaan praktikum</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.4', 4, 0, ['required' => 'true']) }} Pelaksaan modul praktikum lebih dari cukup (ditambah dengan demonstrasi di laboratorium) di PT sendiri</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.4', 3) }} Pelaksanaan modul praktikum cukup diaksanakan di PT sendiri</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.4', 2) }} Pelaksanaan modul praktikum cukup, tetapi dilaksanakan di PT lain</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.4', 1) }} Pelaksanaan modul praktikum kurang dari minimum</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.1.4', 0) }} Tidak ada nilai</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.2.a &nbsp; Pelaksanaan peninjauan kurikulum selama 5 tahun terakhir</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2a', 4, 0, ['required' => 'true']) }} Pengembangan dilakukan secara mandiri dengan melibatkan pemangku kepentingan internal dan eksternal dan memperlihatkan visi, misi, dan umpan balik program studi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2a', 3) }} Pengembangan dilakukan bekerjasama dengan perguruan tinggi lain tetapi tidak melibatkan pemangku kepentingan eksternal lainnya walaupun menyesuaikan dengan visi, misi, dan umpan balik</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2a', 2) }} Pengembangan mengikuti perubahan di perguruan tinggi lain yang disesuaikan dengan visi, misi dan umpan balik</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2a', 1) }} pengembangan mengikuti perubahan di perguruan tinggi lain tanpa penyesuaian</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2a', 0) }} Dalam 5 tahun terakhir, tidak pernah melakukan peninjauan ulang</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.2.b &nbsp; Penyesuaian kurikulum dengan perkembangan ipteks dan kebutuhan</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2b', 4, 0, ['required' => 'true']) }} Pembaharuan kurikulum dilakukan sesuai dengan perkembangan ilmu di bidangnya dan kebutuhan pemangku kepentingan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2b', 3) }} Pembaharuan kurikulum dilakukan sesuai dengan perkembangan ilmu di bidangnya, tetapi kurang memperhatikan kebutuhan pemangku kepentingan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2b', 2) }} Pembaharuan hanya menata ulang kurukulum yang sudah ada, tanpa disesuaikan dengan perkembangan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2b', 1) }} -</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.2b', 0) }} Tidak ada pembaharuan kurikulum selama 5 tahun terakhir</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.3.1.a &nbsp; (<i>tidak bisa di kerjakan</i>)</label>
                            </div>
                            <div class="form-group">
                                <label>5.3.1.b &nbsp; Mekanisme penyusunan materi perkuliahan</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.1b', 4, 0, ['required' => 'true']) }} Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu, dengan memperhatikan masukan dari dosen lain atau dari pengguna lulusan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.1b', 3) }} Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu, dengan memperhatikan masukan dari dosen lain</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.1b', 2) }} Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.1b', 1) }} Materi kuliah hanya disusun oleh dosen pengajar tanpa melibatkan dosen lain</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.1b', 0) }} Tidak ada mekanisme monitoring</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.3.3 &nbsp; Mutu soal ujian</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.2', 4, 0, ['required' => 'true']) }} Mutu soal ujian semuanya bermutu baik, dan sesuai dengan GBPP/SAP</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.2', 3) }} Soal ujian ada satu yang mutunya kurang baik, dan tidak sesuai dengan GBPP/SAP</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.2', 2) }} Soal ujian ada dua s.d tiga mutunya kurang baik, dan tidak sesuai dengan GBPP/SAP </label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.2', 1) }} Soal ujian ada lebih dari atau sama dengan empat yang mutunya kurang baik, dan tidak sesuai dengan GBPP/SAP</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.3.2', 0) }} Semua soal ujian tidak bermutu atau tidak sesuai dengan GBPP/SAP</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.4.1.a &nbsp; Rata-rata banyaknya mahasiswa per dosen Pembibing Akademik (PA)</label>
                                <p>Rata-rata banyak pertemuan/mhs/semester
                                    <input type="number" name="5.4.1a" class="form-control s5-inputBox" placeholder="Rata-rata" min="1" max="9999" step="0.01" required />
                                </p>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
