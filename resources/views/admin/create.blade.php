@extends('layouts.dashboard')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title')
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap"  id="pageTitle">Tambah Admin</div>
            <!-- navbar collapse -->
@endsection
@section('content')
<div class="padding">
  
  <div class="row">
    <div class="col-sm-6">
      <form method="post" action="{{route('admin.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>NIP</label>
              <input name="id" type="text" class="form-control" placeholder="Nomor Induk Pegawai" required>                        
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input name="nama" type="text" class="form-control" placeholder="Nama" required>                        
            </div>

            <div class="form-group">
              <label>Jenis Kelamin</label>
              <input name="jk" type="text" class="form-control" placeholder="Jenis Kelamin" required>                        
            </div>

            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input name="tanggalLahir" type="text" class="form-control" placeholder="Tanggal Lahir">                        
            </div>

            
            <div class="form-group">
              <label>No Telp</label>
              <input name="noTlp" type="text" class="form-control" placeholder="No Telp">                        
            </div>

            <div class="form-group">
              <label>Email</label>
              <input name="email" type="email" class="form-control" placeholder="email">                        
            </div>


           
          </div>
          <div class="dker p-a text-right">
            <button type="submit" class="btn info"><a>Simpan</a></button>
          </div>
        </div>
      </form>
    </div>
    </div>
    </div>
@endsection