@extends('layouts.siak')
@section('css')
        <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
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
					<div class="row">
						<div class="col-md-6">
							<div class="card">
                            <div class="card-header">
                                
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span  class="btn-label"><i class="fa fas fa-plus"> </i></span>  Bayaran Baru</button>
                             </div>
								<div class="card-body">
									<div class="row">
									<div class="col-md-12">
                                    <table id="responsive-datatable" class="table dt-responsive nowrap display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Status</th>
                                            <th style="width: 10%"></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($pembayaranSpp as $pembayaranSpp)
                                        <tr>
                                            <td><b>{{$pembayaranSpp->siswa->nama}}</b><br>{{$pembayaranSpp->siswa->id}}</td>
                                            <td>{{$pembayaranSpp->kelas->nama}}</td>
                                            <td>
                                            @if(($pembayaranSpp->totalBulan)==12)
                                            Lunas
                                            @else
                                            Belum Lunas
                                            @endif
                                            </td>
                                            
                                            <td>
                                            @if(($pembayaranSpp->totalBulan)==12)
                                            
                                            @else
                                            <a href="/pembayaran-spp/{{$pembayaranSpp->id}}/bayar">
                                            <button type="submit"  data-toggle="tooltip" title="" class="btn btn-link btn-succes" data-original-title="Bayar">
											<i class="fa fa-times"></i>
                                            </button>
                                            </a>
                                            @endif
                                                                                                                   
                                        </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                        </div> 
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                             <div class="col-md-6">
							<div class="card">
                            <div class="card-header">
                                
                            History Pembayaran SPP
                             </div>
								<div class="card-body">
									<div class="row">
									<div class="col-md-12">
                                    <table id="responsive-datatable" class="table dt-responsive nowrap display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Sudah dibayar</th>
                                            <th></th>
                                            <th style="width: 10%"></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                    </div> 
                                    </div>
                                    </div>
                                    </div>
                                    </div>
</div>
</div>

</div>
</div>


                            <div id="myModal"  class="modal fade bs-example-modal-lg"  style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Pembayaran SPP</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                        <form name="fform" method="post" action="/pembayaran-spp/create" ui-jp="parsley">
                                        <div class="row">

                                        <div class="col-md-6">
                                        <div class="form-group">
                                        @csrf                                        
                                        <label><h6>Siswa</h6></label>
                                        <select id="siswa_id" name="siswa_id" class="form-control select2" required>
                                                <option></option>
                                                @foreach($siswa as $siswa)
                                                        <option value="{{$siswa->id}}">{{$siswa->id}} - {{$siswa->nama}}</option>
                                                @endforeach
                                        </select>
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>ID Kelas</h6></label>
                                        <input id="kelas_id" name="kelas_id" type="text" class="form-control"  placeholder="Kelas_id" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Kelas</h6></label>
                                        <input id="kelas" name="kelas" type="text" class="form-control"  placeholder="Kelas_id" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-3">
                                        <div class="form-group">
                                        <label><h6>Nominal ID</h6></label>
                                        <input id="nominalSpp_id" name="nominalSpp_id" type="text" class="form-control" placeholder="Nominal" readonly>                        
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label><h6>Nominal</h6></label>
                                        <input id="nominal" name="nominal" type="text" class="form-control" placeholder="Nominal" readonly>                        
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
                                        <input id="bulan" name="bulan[]" value="Januari" type="checkbox" data-exval='1' data-exval='1'><label><h6>Januari</h6></label>                       
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Februari" type="checkbox" data-exval='1'><label><h6>Februari</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Maret" type="checkbox" data-exval='1'><label><h6>Maret</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="April" type="checkbox" data-exval='1'><label><h6>April</h6></label>                       
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Mei" type="checkbox" data-exval='1'><label><h6>Mei</h6></label>                       
                                        </div>
                                        </div>
                                                                                
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Juni" type="checkbox" data-exval='1'><label><h6>Juni</h6></label>                       
                                        </div>
                                        </div>
                                                                                
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Juli" type="checkbox" data-exval='1'><label><h6>Juli</h6></label>                       
                                        </div>
                                        </div>

                                                                                
                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Agustus" type="checkbox" data-exval='1'><label><h6>Agustus</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="September" type="checkbox" data-exval='1'><label><h6>September</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Oktober" type="checkbox" data-exval='1'><label><h6>Oktober</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="November" type="checkbox" data-exval='1'><label><h6>November</h6></label>                       
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-group">
                                        <input id="bulan" name="bulan[]" value="Desember" type="checkbox" data-exval='1'><label><h6>Desember</h6></label>                       
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
                                        <label><h6>Sisa Bulan :</h6></label>
                                        <input id="sisaBulan" name="sisaBulan" type="text" class="form-control" readonly>                        
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
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

@endsection
@section('js')
<script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();
        
                // Responsive Datatable
                $('#responsive-datatable').DataTable();
                $('#tabelSiswa').DataTable({
                    dom:'Bfrtip',
                    "pageLength":5,
                    "bAutoWidth":false,
                    "bInfo":false,

                });
                
            });
</script>

<script type="text/javascript">
$(document).ready(function() {
	$('#siswa_id').select2({
	placeholder: 'Pilih Siswa',
	});

    jQuery(document).ready(function ()
    {
            jQuery('select[name="siswa_id"]').on('change',function(){
                var siswaID = jQuery(this).val();
                  $.ajax({
                     type : "get",
                     url : 'pembayaran-spp/cariSiswaKelas/'+siswaID,
                     dataType : "json",
                     success:function(data)
                     {


                        var kelasID = (data.kelas_id);
                        $.ajax({
                            type : "get",
                            url : 'pembayaran-spp/cariKelas/'+kelasID,
                            dataType : "json",
                            success:function(data)
                            {

                                var kelasID = (data.id);
                                var kelas = (data.nama);
                                var bayarID = (data.id);
                                document.fform.kelas_id.value=kelasID;
                                document.fform.kelas.value=kelas;

                                $.ajax({
                                    type : "get",
                                    url : 'pembayaran-spp/cariNominal/SPP'+bayarID,
                                    dataType : "json",
                                    success:function(data)
                                    {                                        
                                        var nominalID = (data.id);
                                        var nominal = (data.nominal);
                                        document.fform.nominalSpp_id.value=nominalID;                                        
                                        document.fform.nominal.value=nominal;
                                    }
                                })
                                

                                
                            }
                        })


                     }
                    })
            });



    });

    
    $(document).ready(function(){
    $("#bulan input[type='checkbox']").click(function(){
        var tb=0;
        var sb=0;
        var pt = (document.getElementById('potongan').value);
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

    
});
</script>
 @endsection