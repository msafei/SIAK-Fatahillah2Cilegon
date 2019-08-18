@extends('layouts.dashboard')
@section('show-master')
show
@endsection
@section('active-jenis-pembayaran')
active
@endsection
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/jenis-pembayaran"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Edit Jenis Pembayaran</h4>
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
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
              <li class="nav-item">
								<a >Edit Jenis Pembayaran</a>
							</li>
							</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('jenis-pembayaran.update',$jenisPembayaran->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID Jenis Pembayaran</label>
              <input name="id" type="text" class="form-control" placeholder="ID Jenis Pembayaran" value="{{$jenisPembayaran->id}}" disabled>                        
            </div>

						<div class="form-group">
              <label>Jenis Pembayaran</label>
              <input name="nama" type="text" class="form-control" placeholder="Jenis Pembayaran" value="{{$jenisPembayaran->nama}}">                        
            </div>

          </div>
          <div class="card-action text-right">
            <a href="/jenis-pembayaran"><button class="btn btn-danger"><a>Batal</a></button></a>
                  <button type="submit" class="btn btn-success"><a>Ubah</a></button>
                  
								</div>
   
        </div>
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