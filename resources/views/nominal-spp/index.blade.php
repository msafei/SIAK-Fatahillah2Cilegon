@extends('layouts.siak')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('judul')
Nominal SPP
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Setting Keuangan</a></li> 
<li class="breadcrumb-item active">Nominal SPP</li>
@endsection
@section('content')
<div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <div class="m-t-0 header-title">
                                
                            <a href="{{route('nominal-spp.create')}}"><button class="btn btn-success btn-sm"><span  class="btn-label"><i class="fa fas fa-plus"> </i></span>  Tambah</button></a>
            
              
            
            </div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    <table id="responsive-datatable" class="table dt-responsive nowrap display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kelas</th>
                                            <th>Nominal SPP</th>
                                            <th>Nominal x 12</th>
                                            <th style="width: 10%">Aksi</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($nominalSpp as $nominalSpp)
                                        <tr>
                                            <td>{{$nominalSpp ->id}}</td>
                                            <td>{{$nominalSpp->kelas->nama}}</td>
                                            <td>{{$nominalSpp ->nominal}}</td>
                                            <td>{{$nominalSpp ->t_nominal}}</td>
                                            <td>
                                                            <form action="{{route('nominal-spp.destroy',$nominalSpp->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{route('nominal-spp.edit',$nominalSpp->id)}}">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Edit data">
																<i class="fa fa-edit"></i>
                                                            </button></a>
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