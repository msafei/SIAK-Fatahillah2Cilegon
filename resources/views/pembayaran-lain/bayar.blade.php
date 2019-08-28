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
<li class="breadcrumb-item active">Menambah Pembayaran SPP</li>
@endsection
@section('content')

<div class="row">
                             <div class="col-md-12">
							<div class="card">
                            <div class="card-header">
                                
                            History Pembayaran SPP
                             </div>
								<div class="card-body">

                                <form name="fform" method="post" action="/pembayaran-spp/{{$pembayaranSpp->id}}/update" ui-jp="parsley">
                                        <div class="row">
                                        <div class="col-md-3">
                                        <div class="form-group">
                                                        <label><h6>Tanggal</h6></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input name="tanggal" type="text" class="form-control" id="datepicker-autoclose-edit">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                        @csrf                            
                                        <label><h6>ID</h6></label>
                                        <input id="siswa_id" name="siswa_id" type="text" class="form-control"  placeholder="Kelas_id" value="{{$pembayaranSpp->siswa->id}}" readonly>
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">                       
                                        <label><h6>Siswa</h6></label>
                                        <input id="siswa_id" name="siswa" type="text" class="form-control"  placeholder="Kelas_id" value="{{$pembayaranSpp->siswa->nama}}" readonly>
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>ID Kelas</h6></label>
                                        <input id="kelas_id" name="kelas_id" type="text" class="form-control"  placeholder="Kelas_id" value="{{$pembayaranSpp->siswa->kelas->id}}" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Kelas</h6></label>
                                        <input id="kelas" name="kelas" type="text" class="form-control"  placeholder="Kelas_id" value="{{$pembayaranSpp->siswa->kelas->nama}}"  readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Nominal ID</h6></label>
                                        <input id="nominalSpp_id" name="nominalSpp_id" type="text" class="form-control" placeholder="Nominal" value="{{$pembayaranSpp->nominalSpp_id}}" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label><h6>Nominal</h6></label>
                                        <input id="nominal" name="nominal" type="text" class="form-control" placeholder="Nominal" value="{{$pembayaranSpp->nominal}}" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-5">
                                        <div class="form-group">
                                        <label><h6>Potongan :</h6></label>
                                        <input id="potongan" name="potongan" type="text" class="form-control" value="0" >                        
                                        </div>
                                        </div>
                                        
                                        </div>
                                        <div id="bulan" class="row">
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Januari" type="checkbox" data-exval='1' data-exval='1' 
                                        {{in_array("Januari",$bulan)?" disabled ":""}}
                                        ><label><h6>Januari</h6></label>                       
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Februari" type="checkbox" data-exval='1'
                                        {{in_array("Februari",$bulan)?" disabled":""}}
                                        ><label><h6>Februari</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Maret" type="checkbox" data-exval='1'
                                        {{in_array("Maret",$bulan)?" disabled":""}}
                                        ><label><h6>Maret</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="April" type="checkbox" data-exval='1'
                                        {{in_array("April",$bulan)?"disabled":""}}
                                        ><label><h6>April</h6></label>                       
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Mei" type="checkbox" data-exval='1'
                                        {{in_array("Mei",$bulan)?"disabled":""}}
                                        ><label><h6>Mei</h6></label>                       
                                        </div>
                                        </div>
                                                                                
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Juni" type="checkbox" data-exval='1'
                                        {{in_array("Juni",$bulan)?"disabled":""}}
                                        ><label><h6>Juni</h6></label>                       
                                        </div>
                                        </div>
                                                                                
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Juli" type="checkbox" data-exval='1'
                                        {{in_array("Juli",$bulan)?"disabled":""}}
                                        ><label><h6>Juli</h6></label>                       
                                        </div>
                                        </div>

                                                                                
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Agustus" type="checkbox" data-exval='1'
                                        {{in_array("Agustus",$bulan)?"disabled":""}}
                                        ><label><h6>Agustus</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="September" type="checkbox" data-exval='1'
                                        {{in_array("September",$bulan)?"disabled":""}}
                                        ><label><h6>September</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Oktober" type="checkbox" data-exval='1'
                                        {{in_array("Oktober",$bulan)?"disabled":""}}
                                        ><label><h6>Oktober</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="November" type="checkbox" data-exval='1'
                                        {{in_array("November",$bulan)?"disabled":""}}
                                        ><label><h6>November</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Desember" type="checkbox" data-exval='1'
                                        {{in_array("Desember",$bulan)?"disabled":""}}
                                        ><label><h6>Desember</h6></label>                       
                                        </div>
                                        </div>



                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Total Bulan :</h6></label>
                                        <input id="totalBulan" name="totalBulan" type="text" class="form-control" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Sudah dibayar</h6></label>
                                        <input id="sudahBayar" name="sudahBayar" type="text" class="form-control" placeholder="Total" value="{{$pembayaranSpp->totalBulan}}" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label><h6>Total :</h6></label>
                                        <input id="total" name="total" type="text" class="form-control" placeholder="Total" readonly>                        
                                        </div>
                                        </div>


                                        <br>
                                        <div class="modal-footer">
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