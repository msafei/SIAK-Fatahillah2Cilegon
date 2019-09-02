@extends('layouts.siak')
@section('css')
        <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection
@section('judul')
Pembayaran SPP
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">Menambah Pembayaran Lain</li>
@endsection
@section('content')

<div class="row">
                             <div class="col-md-12">
							<div class="card">
                            
								<div class="card-body">

                                <form name="fform" method="post" action="/pembayaran-lain/{{$tunggakanLain->id}}/update" ui-jp="parsley">
                                <div class="row">
                                        <div class="col-md-2">
                                        <div class="form-group">
                                                        <label><h6>Tanggal</h6></label>
                                                        <div>
                                                            <div class="input-group">
                                                            @csrf  
                                                                <input name="tanggal" type="text" class="form-control" id="datepicker-autoclose-edit">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <label><h6>ID</h6></label>
                                        <input id="siswa_id" name="siswa_id" type="text" class="form-control" value="{{$tunggakanLain->siswa_id}}"  readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Siswa</h6></label>
                                        <input id="siswa" name="siswa" type="text" class="form-control" value="{{$tunggakanLain->siswa->nama}}"  readonly>                        
                                        </div>
                                        </div>

                            

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <label><h6>ID Kelas</h6></label>
                                        <input id="kelas_id" name="kelas_id" type="text" class="form-control" value="{{$tunggakanLain->kelas_id}}"  readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Kelas</h6></label>
                                        <input id="kelas" name="kelas" type="text" class="form-control" value="{{$tunggakanLain->kelas->nama}}"  readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <label><h6>ID</h6></label>
                                        <input id="nominal_lain_id" name="nominal_lain_id" type="text" class="form-control" value="{{$tunggakanLain->nominalLain->id}}" readonly>                        
                                        </div>
                                        </div>
                                        

                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label><h6>Pembayaran</h6></label>
                                        <input id="pembayaran" name="pembayaran" type="text" class="form-control" value="{{$tunggakanLain->nominalLain->nominal_lain_id}}" readonly>                        
                                        </div>
                                        </div>
                                        

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Nominal</h6></label>
                                        <input id="nominal" name="nominal" type="text" class="form-control"  value="{{$tunggakanLain->nominal}}"  readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Potongan :</h6></label>
                                        <input id="potongan" name="potongan" type="text" class="form-control potongan" value="0">                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group mt-2">
                                        <label><h6>Sudah Bayar :</h6></label>
                                        <input id="sudahBayar" name="sudahBayar" type="text" class="form-control" value="{{$tunggakanLain->bayar}}" readonly>                        
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group mt-2">
                                        <label><h6>Bayar :</h6></label>
                                        <input id="bayar" name="bayar" type="text" class="form-control" required>                        
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group mt-5">
                                        <button type="submit" class="btn btn-success"><a>Simpan</a></button>
					                    </form>

                                    </div>
                                    </div>
                                    </div>
                                    </div>
</div>
</div>

</div>
</div>


@endsection
@section('js')
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">



    $(document).ready(function(){
        
jQuery('#datepicker-autoclose-edit').datepicker({
    format:"yyyy-mm-dd",
    immediateUpdates : true,
    autoclose: true,
    todayHighlight: true
}).datepicker("setDate","0");

    $("#bulan input[type='checkbox']").click(function(){
        var tb=0;
        var sb=0;
        var pt = (document.getElementById('potongan').value);
        var tn = document.getElementById('nominal').value;
        var tn = document.getElementById('nominal').value;
        $("#bulan input[type='checkbox']:checked").each(function(){
            tb += parseInt($(this).data("exval"),10);
        });
        $("#totalBulan").val(tb);        
        a=eval(tn);
        b=eval(tb);
        c=eval(pt);
        d=eval(12);
        e=(a*b)-c
        $("#total").val(e);
        sb=d-b
        $("#sisaBulan").val(sb);
    });

    });
</script>

 @endsection