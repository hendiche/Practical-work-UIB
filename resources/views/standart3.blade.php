@extends('layouts.app')

@push('pageCss')
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">STANDART 3</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => route('post_standart3')]) !!}
                            <label>3.1.1.a &nbsp; Rasio calon mahasiswa yang ikut seleksi terhadap daya tampuang</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Jumlah Daya Tampung</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1a2" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Jumlah Calon Mahasiswa yang Ikut Seleksi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1a3" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>3.1.1.b &nbsp; Rasio mahasiswa baru rewguler yang melakukan registrasi terhadap calon mahasiswa baru reguler yang lulus seleksi.</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Jumlah Calon Mahasiswa yang Lulus Seleksi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1b4" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Jumlah Mahasiswa Baru yang Reguler(Bukan Transfer)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1b5" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>3.1.1.c &nbsp; Rasio mahasiswa baru transfer terhadap mahasiswa baru regular.</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Jumlah Mahasiswa Baru yang Transfer</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1c6" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Jumlah Mahasiswa Baru yang bukan Transfer</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1c5" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>3.1.1.d &nbsp; Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Rata-rata IPK TS</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1d[]" placeholder="Rata IPK TS" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Rata-rata IPK TS-1</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1d[]" placeholder="Rata IPK TS-1" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Rata-rata IPK TS-2</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1d[]" placeholder="Rata IPK TS-2" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Rata-rata IPK TS-3</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1d[]" placeholder="Rata IPK TS-3" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Rata-rata IPK TS-4</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.1d[]" placeholder="Rata IPK TS-4" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p><strong>NOTE:</strong> TS = Tahun akademik penuh terakhir saat pengisian borang</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>3.1.2 &nbsp; Penerimaan mahasiswa non-reguler selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal (sekitar 12 sks)</label>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.2', 4) }}Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.2', 3) }}Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 13 s.d 15 sks</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.2', 2) }}Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 15 s.d 17 sks</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.2', 1) }}Jumlah mahasiswa yang diterima mengakibatkan beban dosen relatif berat, yaitu lebih dari 17 s.d 19 sks</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.2', 0) }}Jumlah mahasiswa yang diterima mengakibatkan beban dosen sangat berat, melebihi 19 sks</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>3.1.3 &nbsp; Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat.</label>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.3', 4) }}Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat nasional atau internasional</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.3', 3) }}Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat wilayah</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.3', 2) }}Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat local PT</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.3', 1) }}Tidak ada bukti penghargaan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.1.3', 0) }}Tidak ada</label>
                                </div>
                            </div>
                            <label>3.1.4.a &nbsp; Persentase kelulusan tepat waktu.</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Kotak (f)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.4af" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Kotak (d)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.4ad" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>3.1.4.b &nbsp; Persentase mahasiswa yang DO atau mengundurkan diri.</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Kotak (a)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.4ba" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Kotak (b)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.4bb" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>kotak (c)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="3.1.4bc" placeholder="Input Jumlah" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>3.2.1 &nbsp; Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan <br/>
                                Jenis pelayanan kepada mahasiswa antara lain:
                                <ul>
                                    <li>Bimbingan dan konseling</li>
                                    <li>Minat dan bakat (ekstrakurikuler)</li>
                                    <li>Pembinaan <i>soft skill</i></li>
                                    <li>Layanan beasiswa</li>
                                    <li>Layanan kesehatan</li>
                                </ul></label>
                                <div class="radio">
                                    <label>{{ Form::radio('3.2.1', 4) }}Ada semua (5 jenis) pelayanan mahasiswa yang dapat diakses</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.2.1', 3) }}Ada jenis layanan pertama sampai dengan ke-tiga</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.2.1', 2) }}Ada jenis layanan pertama sampai dengan ke-dua</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.2.1', 1) }}Ada 2 jenis unit pelayanan</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.2.1', 0) }}Kurang dari 2 unit pelayanan</label>
                                </div>
                            </div>
                            <label>3.2.2 &nbsp; Kualitas layanan kepada mahasiswa untuk setiap jenis pelayanan, pemberiak skor sebagai berikut:
                            <ul>
                                <li>4 : sangat baik</li>
                                <li>3: baik</li>
                                <li>2: cukup</li>
                                <li>1: kurang</li>
                                <li>0: sangat kurang</li>
                            </ul></label>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Bimbingan dan konseling</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="3.2.2[]" placeholder="Nilai" class="form-control" min="0" max="4" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Minat dan bakar (ekstrakulikuler)</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="3.2.2[]" placeholder="Nilai" class="form-control" min="0" max="4" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Pembinaan <i>soft skill</i></label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="3.2.2[]" placeholder="Nilai" class="form-control" min="0" max="4" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Layanan beasiswa</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="3.2.2[]" placeholder="Nilai" class="form-control" min="0" max="4" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Layanan kesehatan</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="3.2.2[]" placeholder="Nilai" class="form-control" min="0" max="4" />
                                </div>
                            </div>
                            <label>3.3.1.a &nbsp; Upaya pelacakan dan perekaman data kelulusan.</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1a', 4) }} Ada upaya yang intensif untuk melacak kelulusan dan datanya terekan secara komprehensif</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1a', 3) }} Ada upaya yang intensif untuk melacak lulusan, tetapi hasilnya belum terekam secara komprehensif</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1a', 2) }} Upaya pelacakan dilakukan sekedarnya dan hasilnya terekam</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1a', 1) }} Upaya pelacakan lulusan dilakukan sekedarnya dan hasilnya tidak terekam</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1a', 0) }} Tidak ada upaya pelacakan lulusan</label>
                                </div>
                            </div>
                            <label>3.3.1.b &nbsp; Penggunaan hasil pelacakan untuk perbaikan:
                            <ul>
                                <li>Proses pembelajaran</li>
                                <li>Penggalanan dana</li>
                                <li>Informasi pekerjaan</li>
                                <li>Membangun jejaring</li>
                            </ul></label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1b', 4) }} Hasil pelacakan untuk perbaikan 4 item</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1b', 3) }} Hasil pelacakan untuk perbaikan 3 item</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1b', 2) }} Hasil pelacakan untuk perbaikan 2 item</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1b', 1) }} Hasil pelakanan untuk perbaikan 1 item</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.3.1b', 0) }} Tidak ada tindak lanjut.</label>
                                </div>
                            </div>
                            <label>3.3.1.c &nbsp; Pendapat pengguna (<i>employer</i>) lulusan terhadap kualitas alumni.</label>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Tanggapan sangat baik</label>
                                    <input type="nubmer" name="3.3.1ca" placeholder="Total persent(%)" class="form-control" />
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggapan baik</label>
                                    <input type="number" name="3.3.1cb" placeholder="Total persent(%)" class="form-control" />
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggapan cukup</label>
                                    <input type="number" name="3.3.1cc" placeholder="Total persent(%)" class="form-control" />
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggapan kurang</label>
                                    <input type="number" name="3.3.1cd" placeholder="Total persent(%)" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>3.3.2 &nbsp; Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama =
                                        <input type="number" name="3.3.2" style="width: 50px; display: unset;" class="form-control" />
                                        bulan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>3.3.3 &nbsp; Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya =
                                        <input type="number" name="3.3.3" style="width: 50px; display: unset;" class="form-control" />
                                        %
                                    </label>
                                </div>
                            </div>
                            <label>3.4.1 &nbsp; Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk:
                            <ul>
                                <li>Sumbangan dana</li>
                                <li>Sumbangan fasilitas</li>
                                <li>Keterlibatan dalam kegiata akademik</li>
                                <li>Pengembangan jejaring</li>
                                <li>Penyediaan fasilitas untuk kegiatan akademik</li>
                            </ul></label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.1', 4) }} Semua bentuk partisipasi dilakukan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.1', 3) }} Hanya 3-4 bentuk partisipasi dilakukan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.1', 2) }} Hanya 2 bentuk partisipasi yang dilakukan olegh alumin</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.1', 1) }} Hanya 1 bentuk pastisipasi aja yagn dilakukan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.1', 0) }} Tidak ada partisipasi alumni</label>
                                </div>
                            </div>
                            <label>3.4.2 &nbsp; Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk:
                            <ul>
                                <li>Sumbangan dana</li>
                                <li>Sumbangan fasilitas</li>
                                <li>Keterlibatan dalam kegiatan non akademik</li>
                                <li>Pengembangan jejaring</li>
                                <li>Penyediaan fasilitas untuk kegiatan non akademik</li>
                            </ul></label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.2', 4) }} Semua bentuk partisipasi dilakukan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.2', 3) }} Hanya 3-4 bentuk partisipasi dilakuan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.2', 2) }} Hanya 2 bentyuk partisipasi dilakukan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.2', 1) }} Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</label>
                                </div>
                                <div class="radio">
                                    <label>{{ Form::radio('3.4.2', 0) }} Tidak ada partisipasi alumni</label>
                                </div>
                            </div>
                            {{ Form::submit('NEXT TO STANDART 4', ['class' => 'btn btn-block btn-success']) }}
                            <a href="{{ route('standart4') }}" id="next"> > </a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('pageJs')
    <script type="text/javascript">
        $(document).ready(function() {
            console.log('ha ya ku');
        });
    </script>
    @endpush
@endsection
