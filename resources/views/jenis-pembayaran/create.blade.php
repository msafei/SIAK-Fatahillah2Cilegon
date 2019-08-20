@extends('layouts.dashboard')
@section('show-setting')
show
@endsection
@section('active-jenisPembayaran')
active
@endsection
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/jenis-pembayaran"><button type="button" class="btn btn-icon btn-link">
          <i class="fas fa-arrow-left"></i></button></a>
						<h4 class="page-title">Tambah Jenis Pembayaran</h4>
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
								<a >Tambah Kelas</a>
							</li>
							</ul>
					  </div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">

                    <form method="post" action="{{route('jenis-pembayaran.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>ID</label>
              <input name="id" type="text" class="form-control" placeholder="ID Jenis Pembayaran" required>
            </div>


            <div class="form-group">
        <label for="single">Kode Pembayaran</label>
        <select id="single" name="kode" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
            <option value="spp">SPP</option>
            <option value="non spp">Lain-lain</option>
        </select> 
      </div>

            <div class="form-group">
              <label>Jenis Pembayaran</label>
              <input name="nama" type="text" class="form-control" placeholder="Jenis Pembayaran" required>
            </div>

          </div>
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
                  <a href="/jenis-pembayaran"><button class="btn btn-danger"><a>Batal</a></button></a>
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
