@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">STANDART 1</div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('post_standart1')]) !!}
                    <div class="form-group">
                        <label>1.1.a &nbsp; Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran program studi.</label>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 4) }}Memiliki visi, misi, tujuan dan sasaran yang sangat jelas dan sangat realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 3) }}Memiliki visi, misi, tujuan dan sasaran jelas dan realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 2) }}Memiliki visi, misi, tujuan dan sasaran yang cukup jelas namun kurang realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 1) }}Memiliki visi, misi, tujuan, dan sasaran yang kurang jelas dan tidak realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 0) }}Tidak ada</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>1.1.b &nbsp; Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen</label>
                        <div class="radio">
                            <label>
                                {{ Form::radio('1.1.b', 4) }}
                                Strategi pencapaian sasaran:
                                <ul>
                                    <li>dengan tahapan waktu yang jelas dan sangat teralistik</li>
                                    <li>didukung dokumen yang sangat lengkap</li>
                                </ul>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('1.1.b', 3) }}
                                Strategi pencapaian sasaran:
                                <ul>
                                    <li>degan tahapan waktu yang jelas, dan realistik</li>
                                    <li>didukung dokumen yang lengkap</li>
                                </ul>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('1.1.b', 2) }}
                                Strategi pencapaian sasaran:
                                <ul>
                                    <li>dengan tahapan waktu yang jelas, dan cukup realistik</li>
                                    <li>didukung dokumen yang cukup lengkap</li>
                                </ul>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('1.1.b', 1) }}
                                Strategi pencapaian sasaran:
                                <ul>
                                    <li>tanpa adanya tahapan waktu yang jelas</li>
                                    <li>didukung dokumen yang kurang lengkap</li>
                                </ul>
                            </label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.b', 0) }}Tidak ada</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>1.2 &nbsp; Sosialisasi visi-misi. Sosialisasi yang efektif tercermin dari tingkat pemahaman seluruh pemangku kepentingan internal yaitu sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</label>
                        <div class="radio">
                            <label>{{ Form::radio('1.2', 4) }}Dipahami dengan baik oleh seluruh sivitas akademika dan tenaga kependidikan</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.2', 3) }}Dipahami dengan baik oleh sebagian sivitas akademika dan tenaga kependidikan</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.2', 2) }}Kurang dipahami oleh sivitas akademika dan tenaga kependidikan</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.2', 1) }}Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.2', 0) }}Tidak ada</label>
                        </div>
                    </div>

                    {{ Form::submit('NEXT TO STANDART 2', ['class' => 'btn btn-block btn-success']) }}

                    {!! Form::close() !!}
                    <a href="{{ route('standart2') }}" id="next">></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var hasil = {!! json_encode($hasil) !!}

    if (hasil) {
        console.log("in");
        localStorage.nilaiStandart1 = hasil;
        $('#next').trigger('click');
    } else {
        console.log('failde');
    }
</script>
@endsection
