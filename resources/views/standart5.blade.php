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
                    <div class="panel-heading">STANDAR 5</div>
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
                                <p>Jumlah matakuliah pilihan yang disediakan
                                    <input type="number" name="5.1.3" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required id="matkul-sedia" onchange="setMax()" /> sks
                                </p>
                                <p>Jumlah matakuliah pilihan yang harus diambil
                                    <input type="number" name="5.1.3get" class="form-control s5-inputBox" placeholder="Total Matkul" min="1" max="9999" required id="matkul-ambil"/> sks
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
                                    <label>{{ Form::radio('5.2b', 0) }} Tidak ada pembaharuan kurikulum selama 5 tahun terakhir</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.3.1.a &nbsp; Pelaksanaan pemelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki setiap semester dengan memberikan skor jika:
                                    <ul>
                                        <li>1: Tidak ada monitoring</li>
                                        <li>2: Ada monitoring tetapi tidak ada evaluasi</li>
                                        <li>3: Ada monitoring, evaluasi tidak kontinu</li>
                                        <li>4: Ada monitoring dan evaluasi secara kontinu</li>
                                    </ul>
                                </label>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>Kehadiran mahasiswa</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" name="5.3.1a[]" placeholder="Nilai" class="form-control" min="1" max="4" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>Kehadiran dosen</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" name="5.3.1a[]" placeholder="Nilai" class="form-control" min="1" max="4" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label>Materi kuliah</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" name="5.3.1a[]" placeholder="Nilai" class="form-control" min="1" max="4" required />
                                    </div>
                                </div>
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
                                <label>5.3.2 &nbsp; Mutu soal ujian</label>
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
                            <div class="form-group">
                                <label>5.4.1.b &nbsp; Pelaksanaan kegiatan pembimbingan akademik.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.1b', 4, 0, ['required' => 'true']) }} Dilakukan oleh seluruh dosen PA tetapi tidak seluruhnya menurut panduan tertulis</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.1b', 3) }} Perwalian dilakukan oleh seluruh dosen PA tetapi tidak seluruhnya menurut panduan tertulis</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.1b', 2) }} Perkalian dilakukan oleh sebagian dosen PA dan sebagian oleh Tenaga Administrasi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.1b', 1) }} Perwalian tidak dilakukan oleh dosen PA tetapi oleh Tenaga Administrasi</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.1b', 0) }} Tidak ada pembimbingan, hanya ada pengesahan dokumen akademik oleh pegawai administratif</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.4.1.c &nbsp; Jumlah rata-rata pertemuan pembimbingan per mahasiswa per semester.</label>
                                <p>Jumlah rata-rata pertemuan
                                    <input type="number" name="5.4.1c" class="form-control s5-inputBox" placeholder="Rata-rata" min="1" max="9999" step="0.01" required />
                                </p>
                            </div>
                            <div class="form-group">
                                <label>5.4.2 &nbsp; Efektivitas kegiatan perwalian</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.2', 4, 0, ['required' => 'true']) }} Sistem bimbingan akademik sangat efektif</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.2', 3) }} Sistem bimbingan akademik efektif</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.2', 2) }} Sistem bantuan dan bimbingan akademik cukup efektif</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.2', 1) }} Sistem bantuan dan bimbingan akademik tidak afektif</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.4.2', 0) }} Sistem bantuan dan bimbingan akademik tidak jalan, atau tidak ada pembimbingan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.5.1.a &nbsp; Ketersedian panduan, sosialisasi, dan penggunaan</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1a', 4, 0, ['required' => 'true']) }} Ada panduan tertulis yang disosialisasikan dan dilaksanakan dengan konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1a', 3) }} Ada panduan tertulis dan disosialisasikan dengan baik, tetapi tidak dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1a', 2) }} Ada panduan tertulis tetapi tidak disosialisasikan dengan baik, serta tidak dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1a', 0) }} Tidak ada panduan tertulis</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.5.1.b &nbsp; Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA)
                                    <input type="number" name="5.5.1b" class="form-control s5-inputBox w-50"  min="0" max="9999" step="0.01" required />
                                    mahasiswa/dosen TA.
                                </label>
                            </div>
                            <div class="form-group">
                                <label>5.5.1.c &nbsp; Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir:
                                    <input type="number" name="5.5.1c" class="form-control s5-inputBox w-50"  min="0" max="9999" step="0.01" required />
                                    kali mulai dari saat mengambil TA hingga menyelesaikan TA
                                </label>
                            </div>
                            <div class="form-group">
                                <label>5.5.1.d &nbsp; Kualifikasi akademik dosen pembimbing tugas akhir</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1d', 4, 0, ['required' => 'true']) }} Seluruh dosen pembimbing berpendidikan minimal S2 dan sesuai dengan keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1d', 3) }} Seluruh dosen pembimbing berpendidikan minimal S2, tetapi sebagian kecil tidak sesuai dengan bidang keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1d', 2) }} Sebagian besar dosen pembimbing berpendidikan minimal S2, tetapi sebagian kecil tidak sesuai dengan bidang keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.5.1d', 1) }} Sebagian besar dosen pembimbing <i>belum</i> berpendidikan minimal S2 dan tidak sesuai dengan bidang keahliannya</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.5.2 &nbsp; Rata-rata lama penyelesaian tugas akhir/skripsi pada tiga tahun terakhir:
                                    <input type="number" name="5.5.2" class="form-control s5-inputBox w-50"  min="1" max="9999" step="0.01" required />
                                    bulan. <br/>
                                    (Menurut kuriukulum tugas akhir direncanakan
                                        <input type="number" name="5.5.2sem" class="form-control s5-inputBox w-50"  min="1" max="2" required />
                                    semester)
                                </label>
                            </div>
                            <div class="form-group">
                                <label>5.6 &nbsp; Upaya perbaikan sistem pembelajaran yang telah dilakiukan selama tiga tahun terakhir berkaitan dengan:
                                <ul>
                                    <li>Materi</li>
                                    <li>Metode pembelajaran</li>
                                    <li>Penggunaan teknologi pembelajaran</li>
                                    <li>Cara-cara evaluasi</li>
                                </ul></label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.6', 4, 0, ['required' => 'true']) }} Upaya perbaikan dilakukan untuk semua dari yang seharusnya diperbaiki/ditingkatkn.</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.6', 3) }} Upaya perbaikan dilakukan untuk 3 dari 4 yang seharusnya diperbaiki/ditingkatkan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.6', 2) }} Upaya perbaikan dilakukan untuk 2 dari 4 yang seharusnya diperbaiki/ditiungkatkan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.6', 1) }} Upaya perbaikan dilakukan untuk 1 dari 4 yang seharusnya diperbaiki/ditingkatkan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.6', 0) }} Tidak ada upaya perbaikan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.7.1 &nbsp; Kebijakan tertulis tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, kemitraan dosen-mahasiswa)</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.1', 4, 0, ['required' => 'true']) }} Kebijakan lengkap mencakup informasi tentang otonomi </label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.1', 3) }} Kebijakan lengkap mencakup informasi tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa, namun tidak dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.1', 2) }} Kebijakan tertulis kurang lengkap</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.1', 1) }} Tidak ada kebijakan tertulis tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.7.2 &nbsp; Ketersediaan dan kelengkapan jenis prasarana, sarana serta dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.2', 4, 0, ['required' => 'true']) }} Tersedia, milik sendiri, sangat lengkap dan dana yang sangat memadai</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.2', 3) }} Tersedia, milik sendiri, lengkap dan dana yang memadai</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.2', 2) }} Tersedia, cukup lengkap, milik sendiri atau sewa, dan dana yang cukup memadai</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.2', 1) }} Prasarana utama masih kurang, demikian pula dengan dukungan dana</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.7.3 &nbsp; Interaksi akademik berupa program dan kegiatan akademik, selain perkuliahan dan tugas-tugas khusus, untuk menciptakan suasana akademik (seminar, simposium, lokarkarya, bedah buku, dll).</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.3', 4, 0, ['required' => 'true']) }} Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.3', 3) }} Kegiatan ilmiah yang terjadwal dilaksanakan dua s.d tiga bulan sekali</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.3', 2) }} Kegiatan ilmiah yang terjadwal dilaksanakan empat s.d enam bulan sekali</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.3', 1) }} Kegiatan ilmiah yang terjadwal dilaksanakan lebih dari enam bulan sekali</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>5.7.4 &nbsp; Interaksi akademik antara dosen-mahasiswa.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.4', 4, 0, ['required' =>'tru']) }} Upaya baik dan hasilnya suasana kondusif untuk meningkatkan suasana akademik yang baik</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.4', 3) }} Upaya baik, namun hasilnya baru cukup</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.4', 2) }} Cukup dalam upaya dan hasilnya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.4', 1) }} Upaya dinilai kurang dan hasilnya tidak nampak, atau tidak ada upaya</label>
                                </div
                            </div>
                            <div class="form-group">
                                <label>5.7.5 &nbsp; Pengembangan perilaku kecendekiawanan dalam bentuk kegiatan antara lain dapat berupa:
                                <ul>
                                    <li>Kegiatan penanggulagan kemiskinan</li>
                                    <li>Pelestarian lingkungan</li>
                                    <li>Peningkatan kesejahteraan masyarakat</li>
                                    <li>Kegiatan penanggulagan masalah ekonomi, politik, sosial, budaya, dan lingkungan lainnya</li>
                                </ul></label>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.5', 4, 0, ['required' => 'true']) }} Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawanan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.5', 3) }} Kegiatan yang dilakukan menunjang pengembangan perilaku kecendekiawanan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.5', 2) }} Kegiatan yang dilakukan cukup menunjang pengembangan perilaku kecendekiawanan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('5.7.5', 1) }} Kegiatan yang dilakukan tidak menunjang pengembangan perilaku kecendekiawanan</label>
                                </div>
                            </div>
                            {{ Form::submit('LANJUT KE STANDAR 5', ['class' => 'btn btn-block btn-success']) }}
                            {{-- <a href="{{ route('standart6') }}" id="next"> > </a> --}}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var hasil = {!! json_encode($hasil) !!}
        var value = {!! json_encode($value) !!}

        if (hasil || value) {
            localStorage.nilaiStandart5 = hasil;
            localStorage.setItem('value5', JSON.stringify(value));
            window.location.href = '{{ route("standart6") }}';
        }

        function setMax() {
            var maxMatkulSedia = document.getElementById('matkul-sedia').value;
            var test = document.getElementById('matkul-ambil').max = maxMatkulSedia;
        }
    </script>
@endsection
