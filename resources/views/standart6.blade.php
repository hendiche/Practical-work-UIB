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
        .s6-inputBox {
            width: 125px;
            display: unset;
        }
        .w-50 {
            width: 50px;
        }
        .w-75 {
            width: 75px;
        }
        .s6-col-title {
            width: 50%;
            text-align: center;
            vertical-align: middle !important;
        }
        .s6-col-check {
            width: 12.5%;
            vertical-align: middle !important;
        }
        .table th {
            border: 2px solid #ddd;
            border-top: 2px solid #ddd !important;
        }
        .table td {
            border: 2px solid #ddd;
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
                                <p>jumlah dana operasional/mahasiswa/tahun
                                    <input type="number" name="6.2.1" class="form-control s6-inputBox" placeholder="Jumlah Dana" min="1" step="0.01" required />
                                </p>
                            </div>
                            <div class="form-group">
                                <label>6.2.2 &nbsp; Dana penelitian dalam tiga tahun terakhir</label>
                                <p>Rata-rata dana penelitian/dosen tetap/tahun
                                    <input type="number" name="6.2.2" class="form-control s6-inputBox" placeholder="Jumlah Dana" min="1" step="0.01" required /><br/>
                                    <small><i>Note: Di luar dana penelitian/penulisan skripsi, tesis, dan disertasi sebagai bagian dari studi lanjut.</i></small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>6.2.3 &nbsp; Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir</label>
                                <p>Jumlah dana
                                    <input type="number" name="6.2.3" class="form-control s6-inputBox" placeholder="Jumlah Dana" min="1" step="0.01" required />   
                                </p>
                            </div>
                            <div class="form-group">
                                <label>6.3.1 &nbsp; Luas ruang kerja dosen.</label>
                                <p>Jumlah luas satu ruang untuk lebih dari 4 dosen
                                    <input type="number" name="6.3.1a" class="form-control s6-inputBox w-75" placeholder="Luas" min="1" step="0.01" required /> m<sup>2</sup>
                                </p>
                                <p>Jumlah luas satu ruang untuk 3 - 4 dosen
                                    <input type="number" name="6.3.1b" class="form-control s6-inputBox w-75" placeholder="Luas" min="1" step="0.01" required /> m<sup>2</sup>
                                </p>
                                <p>Jumlah luas satu ruang untuk 2 dosen
                                    <input type="number" name="6.3.1c" class="form-control s6-inputBox w-75" placeholder="Luas" min="1" step="0.01" required /> m<sup>2</sup>
                                </p>
                                <p>Jumlah luas satu ruang untuk 1 dosen (bukan pejabat struktural)
                                    <input type="number" name="6.3.1d" class="form-control s6-inputBox w-75" placeholder="Luas" min="1" step="0.01" required /> m<sup>2</sup>
                                </p>
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
                                <p>Jumlah judul
                                    <input type="number" name="6.4.1a" class="form-control s6-inputBox w-75" placeholder="Jumlah" min="1" required />
                                </p>
                            </div>
                            <div class="form-group">
                                <label>6.4.1.b &nbsp; Bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</label>
                                <p>Jumlah judul
                                    <input type="number" name="6.4.1b" class="form-control s6-inputBox w-75" placeholder="Jumlah" min="1" required />
                                </p>
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
                                <p>Jumlah prosiding seminar
                                    <input type="number" name="6.4.1e" class="form-control s6-inputBox w-75" placeholder="Jumlah" min="1" required />
                                </p>
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
                            <div class="form-group">
                                <label>6.4.3 &nbsp; Ketersediaan, akses dan pendayagunaan sarana utama di lab (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, <i>green house</i>, lahan untuk pertanian, dan sejenisnya)</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.3', 4, 0, ['required' => 'true']) }} Sangat memadai, terawat dengan sangat baik, dan Program Studi memiliki akses yang sangat baik (memiliki fleksibilitas dalam menggunakannya di luar kegiatan praktikum terjadwal)</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.3', 3) }} Memadai, sebagian besar dalam kondisi baik, dan Program Studi memiliki akses yang baik (masih memungkinkan menggunakannya di luar kegiatan praktikum terjadwal, walau terbatas)</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.3', 2) }} Cukup memadai, sebagian besar dalam kondisi baik, namun tidak mungkin digunakan di luar kegiatan praktikum terjadwal</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.3', 1) }} Kurang memadai, sehingga kegiatan praktikum dilaksanakan kurang dari batas minimal</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.4.3', 0) }} Sangat kurang, kegiatan praktikum praktis tidak pernah dilakukan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.5.1 &nbsp; Sistem informasi dan fasilitas yang digunakan Program Studi dalam proses pembelajaran (<i>hardware, software, e-learning,</i> perpustakaan, dll.)</label>
                                <div class="radio">
                                    <label>{{ Form::radio('6.5.1', 4, 0, ['required' => 'true']) }} Dengan komputer yang yang terhubung dengan jaringan luas/internet, <i>software</i> yang berlisensi dengan jumlah yang memadai. Tersedia fasilitas <i>e-learning</i> yang digunakan secara baik, dan akses <i>online</i> ke koleksi perpustakaan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.5.1', 3) }} Dengan komputer yang terhubung dengan jaringan luas/internet. <i>software</i> yang berlisensi dengan jumlah yang memadai. Tersedia fasilitas <i>e-learning</i> namun belum dimanfaatkan secara efektif. Koleksi perpustakaan dapat diakses secara <i>online</i> namun masih ada kendala dalam kecepatan akses</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.5.1', 2) }} Sebagian dengan komputer, namun tidak terhubung dengan jaringan luas/internet. Kebanyakan <i>software</i> yang digunakan belum berlisensi. Koleksi perpustakaan dikelola dengan komputer yang tidak terhubung jaringan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.5.1', 1) }} Proses pembelajaran dilakukan secara manual. engelolaan koleksi perpustakaan menggunakan komputer <i>stand alone,</i> atau secara manual</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('6.5.1', 0) }} Tidak ada nilai</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6.5.2 &nbsp; Aksesibilitas data dalam sistem informasi.</label>
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="s6-col-title">Jenis Data</th>
                                                <th colspan="4" class="text-center">Sistem Pengelolaan Data</th>
                                            </tr>
                                            <tr>
                                                <th class="s6-col-check text-center">Secara Manual</th>
                                                <th class="s6-col-check text-center">Dengan Komputer Tanpa Jaringan</th>
                                                <th class="s6-col-check text-center">Dengan Komputer Jaringan Lokal (LAN)</th>
                                                <th class="s6-col-check text-center">Dengan Komputer Jaringan Luas (WAN)</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- {{ Form::submit('NEXT TO STANDART 7', ['class' => 'btn btn-block btn-success']) }} --}}
                            <a href="{{ route('standart7') }}" id="next"> > </a>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function tableBody() {
            for (var i = 0; i < test.length; i++) {
                $('#table-body').append(`
                    <tr>
                        <td>`+test[i].text+`</td>
                        <td class="text-center pointer" onclick="checkIt('`+ test[i].id[0] +`')"><input id="`+ test[i].id[0] +`" type="checkbox" name="`+ test[i].name +`" onclick="checkIt('`+ test[i].id[0] +`')" value="1" /></td>
                        <td class="text-center pointer" onclick="checkIt('`+ test[i].id[1] +`')"><input id="`+ test[i].id[1] +`" type="checkbox" name="`+ test[i].name +`" onclick="checkIt('`+ test[i].id[1] +`')" value="1" /></td>
                        <td class="text-center pointer" onclick="checkIt('`+ test[i].id[2] +`')"><input id="`+ test[i].id[2] +`" type="checkbox" name="`+ test[i].name +`" onclick="checkIt('`+ test[i].id[2] +`')" value="1" /></td>
                        <td class="text-center pointer" onclick="checkIt('`+ test[i].id[3] +`')"><input id="`+ test[i].id[3] +`" type="checkbox" name="`+ test[i].name +`" onclick="checkIt('`+ test[i].id[3] +`')" value="1" /></td>
                    </tr>
                    `);
            }
        }

        function checkIt(id) {
            var value = document.getElementById(id).checked;
            document.getElementById(id).checked = !value;
        }

        var test = [
            {
                'text' : 'Mahasiswa',
                'id' : [
                    '1col3',
                    '1col4',
                    '1col5',
                    '1col6'
                ],
                'name' : '6.5.21[]'
            },
            {
                'text' : 'Kartu Rencana Studi (KRS)',
                'id' : [
                    '2col3',
                    '2col4',
                    '2col5',
                    '2col6'
                ],
                'name' : '6.5.22[]'
            },
            {
                'text' : 'Jadwal mata kuliah',
                'id' : [
                    '3col3',
                    '3col4',
                    '3col5',
                    '3col6'
                ],
                'name' : '6.5.23[]'
            },
            {
                'text' : 'Nilai mata kuliah',
                'id' : [
                    '4col3',
                    '4col4',
                    '4col5',
                    '4col6'
                ],
                'name' : '6.5.24[]'
            },
            {
                'text' : 'Transkrip akademik',
                'id' : [
                    '5col3',
                    '5col4',
                    '5col5',
                    '5col6'
                ],
                'name' : '6.5.25[]'
            },
            {
                'text' : 'Lulusan',
                'id' : [
                    '6col3',
                    '6col4',
                    '6col5',
                    '6col6'
                ],
                'name' : '6.5.26[]'
            },
            {
                'text' : 'Dosen',
                'id' : [
                    '7col3',
                    '7col4',
                    '7col5',
                    '7col6'
                ],
                'name' : '6.5.27[]'
            },
            {
                'text' : 'Pegawai',
                'id' : [
                    '8col3',
                    '8col4',
                    '8col5',
                    '8col6'
                ],
                'name' : '6.5.28[]'
            },
            {
                'text' : 'Keuangan',
                'id' : [
                    '9col3',
                    '9col4',
                    '9col5',
                    '9col6'
                ],
                'name' : '6.5.29[]'
            },
            {
                'text' : 'Inventaris',
                'id' : [
                    '10col3',
                    '10col4',
                    '10col5',
                    '10col6'
                ],
                'name' : '6.5.210[]'
            },
            {
                'text' : 'Perpustakaan',
                'id' : [
                    '11col3',
                    '11col4',
                    '11col5',
                    '11col6'
                ],
                'name' : '6.5.211[]'
            },
        ];

        tableBody();
    </script>
@endsection
