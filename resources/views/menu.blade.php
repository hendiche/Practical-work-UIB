@extends('layouts.app')
@push('pageCss')
    <style type="text/css">
        .top-row {
            margin-top: 5%;
        }
        .bot-col {
            margin-bottom: 1%;
        }
    	.button-in {
            padding-top: 20px;
            padding-bottom: 20px;
            font-size: 21px
        }
        .flat {
            border-radius: 0;
        }
        .img {
            width: 275px;
        }
        #startAsk, #detail, #reset {
            margin-top: 10%;
        }
        .d-flex {
            display: flex;
            flex-direction: row;
        }
        .d-flex > div {
            flex: 1;
            border: 1px solid black;
            border-right: 0;
            text-align: left;
            padding: 10px 5px;
            font-size: 16px;
            color: #000;
        }
        .d-flex > div:last-child {
            border-right: 1px solid black;
        }
        .done {
            color: #5cb85c
        }
        .undone {
            color: #d9534f
        }
        .more-small {
            font-size: 12px
        }
        @media only screen and (max-width: 768px) {
            .d-flex {
                flex-direction: column;
            }
            .d-flex > div {
                border-right: 1px solid black;
                text-align: center;
            }
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row top-row">
        <div class="col-md-10 col-md-offset-1 text-center">
        	<div>
        		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAqGWUSTmutwYDSeABtBViZjS-byHzn9QFcLkWThq_YA8M17fF" class="img">
        	</div>
        </div>
        <div class="col-md-12 text-center bot-col" id="middle-div">
            <h2>Status pengisian</h2>
            <div class="d-flex">
                <div class="hvr-glow" id="standart1">Standar 1</div>
                <div class="hvr-glow" id="standart2">Standar 2</div>
                <div class="hvr-glow" id="standart3">Standar 3</div>
                <div class="hvr-glow" id="standart4">Standar 4</div>
                <div class="hvr-glow" id="standart5">Standar 5</div>
                <div class="hvr-glow" id="standart6">Standar 6</div>
                <div class="hvr-glow" id="standart7">Standar 7</div>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5" id="button-container">
        	<a class="btn btn-primary btn-block flat button-in hvr-float-shadow" id="startAsk">Mulai simulasi</a>
            <a class="btn btn-info btn-block flat button-in hvr-float-shadow" id="detail"> Rincian </a>
        </div>
    </div>
</div>

{{-- <div id="startModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-size">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
        </div>
      <div class="modal-body modal-text">
        <p>Apakah anda ingin memulai penilaian simulasi akreditasi dari awal?</p>
        <br/>
        <small class="more-small"><i>jika 'YA', maka nilai status pengisian akan dihapus seluruhnya dan memulai pengisian dari awal</i></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default flat" data-dismiss="modal">TIDAK</button>
        <button type="button" class="btn btn-default flat" data-dismiss="modal" id="start">YA</button>
      </div>
    </div>
  </div>
</div> --}}

@endsection
@push('pageJs')
<script type="text/javascript">
    var theresData = false;
    var route = 'standart1';
    var theresDataCount = 0;
    var totalScore = 0;

    function init(data) {
        var changing = true;

        for (var i = 0; i < data.length; i++) {
            if (data[i].data) {
                theresData = true;
                theresDataCount += 1;
                totalScore += data[i].data;
                if (changing && i < 5) {
                    route = data[i + 1].id;
                }
                $('#'+data[i].id).append(' <i class="fa fa-check-circle done" aria-hidden="true"></i>');
            } else {
                changing = false;
                $('#'+data[i].id).append(' <i class="fa fa-times-circle undone" aria-hidden="true"></i>');
            }
        }

        if (theresData) {
            $('#startAsk').text('Lanjut simulasi');
        }

        if (theresDataCount == 7) {
            $('#middle-div').append(`
                <div>
                    <h3 class="animated flipInY">Total skor dari simulasi akreditasi adalah</h3>
                    <h2 class="animated zoomInUp" style="animation-duration: 2.5s"><strong>`+totalScore+`</strong></h2>
                </div>
                `);
            $('#startAsk').remove();
            $('#button-container').append('<a class="btn btn-danger btn-block flat button-in hvr-float-shadow" onclick="reset()" id="reset">Reset skor</a>');
        }
    }

    function reset() {
        localStorage.clear();
        window.location.href = '/menu';
    }

    var allData = [
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart1')),
            'id': 'standart1'
        },
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart2')),
            'id': 'standart2'
        },
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart3')),
            'id': 'standart3'
        },
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart4')),
            'id': 'standart4'
        },
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart5')),
            'id': 'standart5'
        },
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart6')),
            'id': 'standart6'
        },
        {
            'data': JSON.parse(localStorage.getItem('nilaiStandart7')),
            'id': 'standart7'
        }
    ];

    // $('#startAsk').click(function() {
    //     $('#startModal').modal();
    // });
    $('#startAsk').click(function() {
        if (theresData) {
            window.location.href = '/' + route;
        } else {
            window.location.href = '{{ route('standart1') }}';
        }
    });
    $('#detail').click(function() {
        if (theresDataCount !== 7) {
            $('#content-text').text('Silahkan isi standar yang belum terlebih dahulu sebelum melihat rincian!!!');
            $('#warningModal').modal();
        }
    });

    init(allData);
</script>
@endpush
