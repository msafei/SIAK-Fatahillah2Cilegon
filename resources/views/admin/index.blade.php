@extends('layouts.dashboard')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title')
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap"  id="pageTitle">Data Admin</div>
        
            <!-- navbar collapse -->

              <div class="nav-link">
              <span><a class="btn btn-outline b-success text-success"><i class="fa fa-fw fa-plus "></i>Tambah</a></span>                
              <span><a class="btn btn-outline b-info text-info"><i class="fa fa-fw fa-plus "></i>Export</a></span>    
              <span><a class="btn btn-outline b-info text-info"><i class="fa fa-fw fa-plus "></i>Import</a></span>
              <span><a class="btn btn-outline b-info text-info"><i class="fa fa-fw fa-plus "></i>Print</a></span>             

              
              <!-- / -->
            </div>
@endsection
@section('content')
<div class="padding">
  <div class="box">
<div class="row">
                            <div class="col-12">
                               

                                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            @foreach($user as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td> <button class="btn btn-icon btn-rounded btn-success">
              <a><i class="fa fa-eye"></i></a>
</button></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                        </div> 
  </div>
</div>
<!-- end row -->

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