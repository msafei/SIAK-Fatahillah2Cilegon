@extends('layouts.dashboard')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title')
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap"  id="pageTitle">Data User</div>
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
@endsection