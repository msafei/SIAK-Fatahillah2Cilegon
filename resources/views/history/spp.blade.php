@extends('layouts.siak')
@section('css')
        <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection
@section('judul')
History Pembayaran SPP
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">History Pembayaran SPP</li>
@endsection
@section('content')
<div class="row">

                             <div class="col-md-12">
							<div class="card">
                            <div class="card-header">
                                
                            HISTORY PEMBAYARAN SPP
                             </div>
								<div class="card-body">
									<div class="row">
									<div class="col-md-12">
                                    <table id="responsive-datatable-history" class="table dt-responsive nowrap display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>No Transaksi</th>
                                            <th>Siswa</th>
                                            <th>Bulan Bayar</th>
                                            <th>Sudah dibayar</th>
                                            <th style="width: 6%"></th>
                                        </tr>
                                        </thead>
                                        @foreach($tunggakanSpp as $tunggakanSpp)
                                        <tr>
                                            <td>{{$tunggakanSpp->id}}</td>
                                            <td><b>{{$tunggakanSpp->siswa->nama}}</b><br>{{$tunggakanSpp->siswa->id}}</td>
                                            <td>{{$tunggakanSpp->bulan}}</td>
                                            <td>
                                            @if(($tunggakanSpp->sisaBulan)==0)
                                            <span class="badge  badge-success" style="padding-top:5px; padding-bottom:5px; padding-right:30px; padding-left:30px;">Lunas</span>
                                            @else
                                            <span class="badge  badge-warning" style="padding-top:5px; padding-bottom:5px; padding-right:13px; padding-left:13px;">Belum Lunas</span>
                                            @endif
                                            </td>
                                            <td>
                                            <a href="/pembayaran-spp/{{$tunggakanSpp->id}}/print" target="_blank">
                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-info" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>                                                                   
                                            </a>
                                        </td>
                                        </tr>
                                        @endforeach
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

@endsection
@section('js')

<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">



$(document).ready(function() {


                // Default Datatable
                $('#datatable').DataTable();
        
                // Responsive Datatable
                $('#responsive-datatable').DataTable({
                    dom:'Bfrtip',
                    "pageLength":3,
                    "bAutoWidth":false,
                    "bInfo":false,
                });
                $('#responsive-datatable-history').DataTable({
                    dom:'Bfrtip',
                    "pageLength":3,
                    "bAutoWidth":false,
                    "bInfo":false,
                    "order":[[0,"desc"]]
                });
                
            });
</script>
 @endsection