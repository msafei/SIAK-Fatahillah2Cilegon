@extends('layouts.dashboard')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('show-setting')
show
@endsection
@section('active-jenisPembayaran')
active
@endsection
@section('content')
<div class="page-inner">
					<div class="page-header">
                    
						<h4 class="page-title">Data Jenis Pembayaran</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/home">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/jenis-pembayaran">Data Jenis Pembayaran</a>
							</li>
							</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
                            <div class="card-header">
                                
                            <a href="{{route('jenis-pembayaran.create')}}"><button class="btn btn-success btn-sm"><span  class="btn-label"><i class="fa fas fa-plus"> </i></span>  Tambah</button></a>
              <button class="btn btn-primary btn-sm"><span class="btn-label"><i class="fa fas fa-file-export"> </i></span>  Export</button>
              <button class="btn btn-secondary btn-sm"><span class="btn-label"><i class="fa fas fa-file-import"> </i></span>  Import</button>
            
              
            
            </div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    <table id="responsive-datatable" class="table dt-responsive nowrap display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Pembayaran</th>
                                            <th>Jenis Pembayaran</th>
                                            <th style="width: 10%">Aksi</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($jenisPembayaran as $jenisPembayaran)
                                        <tr>
                                            <td>{{$jenisPembayaran ->id}}</td>
                                            <td>{{$jenisPembayaran ->kode}}</td>
                                            <td>{{$jenisPembayaran ->nama}}</td>
                                            <td>
                                                            <form action="{{route('jenis-pembayaran.destroy',$jenisPembayaran->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Edit data">
																<a href="{{route('jenis-pembayaran.edit',$jenisPembayaran->id)}}"><i class="fa fa-edit"></i></a>
                                                            </button>
															<button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus data">
																<i class="fa fa-times"></i>
                                                            </button>
                                                            </form>
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
</div>
</div>
</div>
@endsection
@section('js')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();
        
                // Responsive Datatable
                $('#responsive-datatable').DataTable();

            });
        </script>
        @endsection