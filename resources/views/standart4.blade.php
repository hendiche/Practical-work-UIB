@extends('layouts.app')

@push('pageCss')
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .s4-inputBox {
            width: 100px;
            display: unset;
        }
        .s4-w50 {
            width: 50px;
        }
        .s4-jumlah {
            width: 75px;
        }
        .input-FTE {
            font-weight: normal;
            width: 120px;
        }
        .input-pertemuan-dosen {
            width: 150px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">STANDART 4</div>
                    <div class="panel-body">
                        {{ Form::open(['url' => route('post_standart4')]) }}
                            <div class="form-group">
                                <label>4.1 &nbsp; Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan</label>
                                <div class="radio">
                                    <label>{{ Form::radio('4.1', 4, 0, ['required' => 'true']) }} Ada pedoman tertulis yang lengkap dan ada bukti dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.1', 3) }} Ada pedoman tertulis yang lengkap dan tidak ada bukti dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.1', 2) }} Ada pedoman tertulis yang lengkap tetapi tidak dilaksanakan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.1', 1) }} Ada pedoman tertulis tidak lengkap dan tidak dilaksanakan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.1', 0) }} Tidak ada pedoman tertulis</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>4.2.1 &nbsp; Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan</label>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.1', 4, 0, ['required' => 'true']) }} Ada pedoman tertulis yang lengkap dan ada bukti dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.1', 3) }} Ada pedoman tertulis yang lengkap dan ada bukti tidak dilaksanakan secara konsisten</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.1', 2) }} Ada pedoman tertulis yang lengkap tetapi tidak dilaksanakan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.1', 1) }} Ada pedoman tertulis tidak lengkap dan tidak dilaksanakan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.1', 0) }} Tidak ada pedoman tertulis</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>4.2.2 &nbsp; Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat</label>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.2', 4, 0, ['required' => 'true']) }} Ada bukti tentang kinerja dosen di bidang
                                    <ul>
                                        <li>Pendidikan</li>
                                        <li>Penelitian</li>
                                        <li>Pelayanan/pengabdian kepada masyarakat yang terdokumentasi dengan baik</li>
                                    </ul></label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.2', 3) }} Ada bukti tentang kinerja dosen di bidang
                                    <ul>
                                        <li>Pendidikan</li>
                                        <li>Penelitian</li>
                                        <li>Pelayanan/pengabdian kepada masyarakat tetapi tidak terdokumentasi dengan baik</li>
                                    </ul></label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.2', 2) }} Ada bukti tentang kinerja dosen di bidang pendidikan yang terdokumentasikan dengan baik tetapi tidak ada di bidang penelitian atau pelayanan/pengabdian kepada masyarakat</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.2', 1) }} Ada bukti tentang kinerja dosen di bidang pendidikan tetapi tidak terdokumentasikan dengan baik serta tidak ada di bidang penelitian atau pelayanan/pengabdian kepada masyarakat</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.2.2', 0) }} Tidak ada bukti tentang kinerja dosen yang terdokumentasikan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>4.3.1 &nbsp; Data dosen tetap yang bidang keahlianyna sesuai dengan bidang Program Studi</label>
                                <p>Jumlah semua dosen tetap yang bidang keahliannya sesuai PS
                                    <input type="number" name="4.3.1" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                                <p>Jumlah dosen tetap yang berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai PS
                                    <input type="number" name="4.3.1a" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                                <p>Jumlah dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai PS
                                    <input type="number" name="4.3.1b" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                                <p>Jumlah dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai PS
                                    <input type="number" name="4.3.1c" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                                <p>Jumlah dosen tetap yang memiliki Sertifikat Pendidik Profesional
                                    <input type="number" name="4.3.1d" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                                <h5><small><i>NOTE: PS = Program studi</i></small></h5>
                            </div>
                            <div class="form-group">
                                <label>4.3.2 &nbsp; (<i>tidak bisa di kerjakan</i>)</label>
                            </div>
                            <div class="form-group">
                                <label>4.3.3 &nbsp; Rata-rata beban dosen per semester, atau rata-rata FTE (<i>Fulltime Teaching Equivalent</i>)
                                    <input type="number" name="4.3.3" class="form-control s4-inputBox input-FTE" placeholder="Rata-rata sks" min="1" max="999" step="0.01" required />
                                    sks
                                </label>
                            </div>
                            <label>4.3.4 &nbsp; Kesesuaian keahlian (pendidikan terakhir) dosen dengan mata kuliah yang diajarkannya</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('4.3.4', 4, 0, ['required' => 'true']) }} Semua mata kuliah diajar oleh dosen yagn sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.3.4', 3) }} 1 - 3 mata kuliah diajar oleh dosen yang tidak sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.3.4', 2) }} 4 - 7 mata kiliah diajar oleh dosen yang tidak sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.3.4', 1) }} Lebih dari 7 mata kuliah diajar oleh dosen yang tidak sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.3.4', 0) }} Tidak ada penilaian</label>
                                </div>
                            </div>
                            <label>4.3.5 &nbsp; Tingkat kehadiran dosen tetap dalam mengajar</label>
                            <div class="form-group">
                                <p>Jumlah semua pertemuan mata kuliah yang direncanakan
                                    <input type="number" name="4.3.5ren" class="form-control s4-inputBox input-pertemuan-dosen" placeholder="Jumlah Rencana" min="1" max="9999" required />
                                </p>
                                <p>Jumlah semua pertemuan mata kuliah yang terlaksanakan
                                    <input type="number" name="4.3.5lak" class="form-control s4-inputBox input-pertemuan-dosen" placeholder="Jumlah terlaksana" min="1" max="9999" required />
                                </p>
                                <small><i>Semua dosen tetap yang sesuai bidang keahliannya maupun di luar bidang keahliannya</i></small>
                            </div>
                            <label>4.4.1 &nbsp; Jumlah dosen tidak tetap, terhadap jumlah seluruh dosen</label>
                            <div class="form-group">
                                <p>Jumlah seluruh dosen yang tetap maupun tidak tetap
                                    <input type="number" name="4.4.1tot" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                                <p>Jumlah dosen yang tidak tetap
                                    <input type="number" name="4.4.1tdk" class="form-control s4-inputBox" placeholder="Total Dosen" min="1" max="9999" required />
                                </p>
                            </div>
                            <label>4.4.2.a &nbsp; Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('4.4.2a', 4, 0, ['required' => 'true']) }} Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.4.2a', 3) }} 1 - 2 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.4.2a', 2) }} 3 - 4 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.4.2a', 1) }} 5 - 6 mata kuliah diahar oleh dosen tidak tetap yang tidak sesuai keahliannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.4.2a', 0) }} Lebih dari 6 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</label>
                                </div>
                            </div>
                            <label>4.4.2.b &nbsp; Tingkat kehadiran dosen tidak tetap dalam mengajar</label>
                            <div class="form-group">
                                <p>Jumlah semua pertemuan mata kuliah yang direncanakan
                                    <input type="number" name="4.4.2bren" class="form-control s4-inputBox input-pertemuan-dosen" placeholder="Jumlah Rencana" min="1" max="9999" required />
                                </p>
                                <p>Jumlah semua pertemuan mata kuliah yang terlaksanakan
                                    <input type="number" name="4.4.4blak" class="form-control s4-inputBox input-pertemuan-dosen" placeholder="Jumlah terlaksana" min="1" max="9999" required />
                                </p>
                                <small><i>Semua dosen tidak tetap yang sesuai bidang keahliannya maupun di luar bidang keahliannya</i></small>
                            </div>
                            <label>4.5.1 &nbsp; Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luat PT sendiri (tidak termasuk dosen tidak tetap)</label>
                            <div class="form-group">
                                <p>Jumlah tenaga ahli/pakar
                                    <input type="number" name="4.5.1" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required />
                                    orang
                                </p>
                            </div>
                            <label>4.5.2 &nbsp; Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</label>
                            <div class="form-group">
                                <p>Jumlah dosen yang mengikuti tugas belajar jengjang S2 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir
                                    <input type="number" name="4.5.2s2" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                                <p>Jumlah dosen yang mengikuti tugas belajar jenajng S3 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir
                                    <input type="number" name="4.5.2s3" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                            </div>
                            <label>4.5.3 &nbsp; Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ <i>workshop</i>/ pagelaran/ pameran/ peragaan yang tidak hanya melibatkan dosen PT sendiri.</label>
                            <div class="form-group">
                                <p>Jumlah makalah atau kegiatan (sebagai penyaji)
                                    <input type="number" name="4.5.3a" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required />
                                </p>
                                <p>Jumlah kehadiran (sebagai peserta)
                                    <input type="number" name="4.5.3b" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required />
                                </p>
                            </div>
                            <label>4.5.4 &nbsp; Prestasi dalam mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari tingkat nasional dan internasional; besaran dan proporsi dana penelitian dari sumber institusi sendiri dan luar institusi</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.4', 4, 0, ['required' => 'true']) }} Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi insternasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.4', 3) }} Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi nasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.4', 2) }} Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi regional/lokal</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.4', 1) }} Mendapatkan penghargaan, hibah, pendanaan program dan kegiatan akademik yang berupa hibah dana dari PT sendiri</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.4', 0) }} Tidak pernah mendapat penghargaan</label>
                                </div>
                                <small><i>Note: selama tiga tahun terakhir</i></small>
                            </div>
                            <label>4.5.5 &nbsp; Reputasi dan keluasan jejarin dosen dalam bidang akademik dan profesi</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.5', 4, 0, ['required' => 'true']) }} Lebih dari 30% dosen tetap menjadi anggota masyarakat bidang ilmu tingkat internasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.5', 3) }} Lebih dari 30% dosen tetap menjadi anggota masyarakat bidang ilmu tingkat internasional maupun nasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.5', 2) }} Antara 15% s.d 30% dosen tetap yang menjadi anggota masyarakat bidang ilmu tingkat internasional atau nasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.5', 1) }} Ada tapi kurang dari 15% dosen tetap yang menjadi anggota masyarakat bidang ilmu tingkat internasinal atau nasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.5.5', 0) }} Tidak ada dosen tetap yang menjadi anggota masyarakat bidang ilmu</label>
                                </div>
                            </div>
                            <label>4.6.1.a &nbsp; Jumlah pustakawan dan kualifikasinya</label>
                            <div class="form-group">
                                <p>Jumlah pustakawan yang berpendidikan S2 atau S3
                                    <input type="number" name="4.6.1ax1" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                                <p>Jumlah pustakawan yang berpendidikan D4 atau S1
                                    <input type="number" name="4.6.1ax2" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                                <p>Jumlah pustakawan yang berpendidikan D1, D2, atau D3
                                    <input type="number" name="4.6.1ax3" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                            </div>
                            <label>4.6.1.b &nbsp; Jumlah Laboran, teknisi, operator, <i>programmer</i></label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2b', 4, 0, ['required' => 'true']) }} Jumlah cukup dan sangat baik kegiatnnya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2b', 3) }} Jumlah cukup dan memadai kegiatannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2b', 2) }} Cukup dalam jumlah dan kualifikasi tetapi mutu kerjanya sedang-sedang saja</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2b', 1) }} Kurang dalam jumlah atau terlalu banyak sehingga kurang kegiatannya</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2b', 0) }} Tidak ada penilaian</label>
                                </div>
                            </div>
                            <label>4.6.1.c &nbsp; Jumlah tenaga administrasi</label>
                            <div class="form-group">
                                <p>Jumlah tenaga administrasi yang berpendidikan D4 atau S1 ke atas
                                    <input type="number" name="4.6.1cx1" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                                <p>Jumlah tenaga administrasi yang berpendidikan D3
                                    <input type="number" name="4.6.1cx2" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                                <p>Jumlah tenaga administrasi yang berpendidikan D1 atau D2
                                    <input type="number" name="4.6.1cx3" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                                <p>Jumlah tenaga administrasi yang berpendidikan SMU/SMK
                                    <input type="number" name="4.6.1cx4" class="form-control s4-inputBox s4-jumlah" placeholder="Jumlah" min="1" max="9999" required /> orang
                                </p>
                            </div>
                            <label>4.6.2 &nbsp; Upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, Upaya yang terkait dengan:
                            <ul>
                                <li>Pemberian kesempatan belajar/pelatihan</li>
                                <li>Pemberian fasilitas, termasuk dana</li>
                                <li>Jenjang karir</li>
                            </ul></label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2', 4, 0, ['required' => 'true']) }} Upaya pengembangan telah dilalukan dengan sangat baik sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2', 3) }} Upaya pengembangan telah dilakukan dengan baik sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2', 2) }} Upaya pengembangan telah dilakukan dengan cukup sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2', 1) }} Tidak ada upaya pengembangan, padahal kualifikasi dan kompetensi tenaga kependidikan relatif masih kurang</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('4.6.2', 0) }} Tidak ada penilaian</label>
                                </div>
                            </div>
                            {{-- {{ Form::submit('NEXT TO STANDART 5', ['class' => 'btn btn-block btn-success']) }} --}}
                            <a href="{{ route('standart5') }}" id="next"> > </a>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
