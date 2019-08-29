@extends('layouts.siak')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('judul')
Pengeluaran
@endsection
@section('breadcrumb')
@endsection
@section('content')
<div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <div class="m-t-0 header-title">
                                <button class="btn btn-success btn-sm"  data-toggle="modal" data-target="#myModal"><span  class="btn-label"><i class="fa fas fa-plus"> </i></span>  Tambah Pengeluaran</button>
                                    </div><br>    
                                    <table id="responsive-datatable" class="table dt-responsive nowrap display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>keterangan</th>
                                            <th>Nominal</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($pengeluaran as $pengeluaran)
                                        <tr>
                                            <td>{{$pengeluaran->id}}</td>
                                            <td>{{$pengeluaran->nama}}</td>
                                            <td>{{$pengeluaran->keterangan}}</td>
                                            <td>{{"Rp.".number_format($pengeluaran->nominalPengeluaran,0,",",",")}}</td>
                                            <td>
                                            @if(($pengeluaran->status)==0)
                                            <span class="badge  badge-warning" style="padding-top:5px; padding-bottom:5px; padding-right:30px; padding-left:30px;">Pendding</span>
                                            @elseif(($pengeluaran->status)==1)
                                            <span class="badge  badge-success" style="padding-top:5px; padding-bottom:5px; padding-right:13px; padding-left:13px;">Diterima</span>
                                            @else
                                            <span class="badge  badge-danger" style="padding-top:5px; padding-bottom:5px; padding-right:13px; padding-left:13px;">Ditolak</span>
                                            @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                            </div>
                        </div> <!-- end row -->


                        <div id="myModal"  class="modal fade bs-example-modal-md"  style="display: none;">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                        <form name="fform" method="post" action="/pengeluaran/create" ui-jp="parsley">
                                        <div class="row">

                                        <div class="col-md-12">
                                        @csrf 
                                        <div class="form-group">
                                                        <label><h6>Tanggal</h6></label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input name="tanggal" type="text" class="form-control" id="datepicker-autoclose">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                        <div class="col-md-12">
                                         
                                        <div class="form-group">
                                        <label><h6>Nama Pengeluaran</h6></label>
                                        <input id="nama" name="nama" type="text" class="form-control" >                        
                                        </div>
                                        </div>

                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <label><h6>Nominal</h6></label>
                                        <input id="nominal" name="nominal" type="text" class="form-control" >                    
                                        </div>
                                        </div>


                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <label><h6>Keterangan</h6></label>
                                        <textarea id="keterangan" name="keterangan" type="text" class="form-control" ></textarea>
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
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->



@endsection
@section('js')
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {

    jQuery('#datepicker-autoclose').datepicker({
        format:"yyyy-mm-dd",
        immediateUpdates : true,
        autoclose: true,
        todayHighlight: true
    }).datepicker("setDate","0");


                // Default Datatable
                $('#datatable').DataTable();
        
                // Responsive Datatable
                $('#responsive-datatable').DataTable({
                    
                });
                
            });
</script>
        @endsection