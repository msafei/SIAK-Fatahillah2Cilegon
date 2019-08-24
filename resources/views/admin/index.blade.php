@extends('layouts.siak')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('judul')
Data Admin
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Data Admin</li>
@endsection
@section('content')
<div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <div class="m-t-0 header-title">
                                <a href="{{route('admin.create')}}"><button class="btn btn-success btn-sm"><span  class="btn-label"><i class="fa fas fa-plus"> </i></span>  Tambah Data</button></a>
</div><br>    
                                <table id="responsive-datatable" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>No Telp</th>
                                            <th style="width: 10%">Aksi</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($admin as $admin)
                                        <tr>
                                            <td>{{$admin->id}}</td>
                                            <td>{{$admin->nama}}</td>
                                            <td>{{$admin->jk}}</td>
                                            <td>{{$admin->alamat}}</td>
                                            <td>{{$admin->tanggalLahir}}</td>
                                            <td>{{$admin->noTlp}}</td>
                                            <td>
                                                            <form action="{{route('admin.destroy',$admin->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Edit data">
																<a href="{{route('admin.edit',$admin->id)}}"><i class="fa fa-edit"></i></a>
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
                        </div> <!-- end row -->
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

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );
        </script>
        @endsection