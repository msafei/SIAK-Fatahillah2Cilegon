@extends('layouts.dashboard')
@section('show-master')
show
@endsection
@section('active-nominal-spp')
active
@endsection
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/nominal-spp"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Tambah Nominal SPP</h4>
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
								<a href="/nominal-spp">Data Nominal SPP</a>
              </li>
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
              <li class="nav-item">
								<a >Tambah Nominal SPP</a>
							</li>
							</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('nominal-spp.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>ID</label>
              <input name="id" type="text" class="form-control" placeholder="ID Nominal SPP" required>                        
            </div>

						<div class="form-group">
        		<label for="single">Jenis Pembayaran</label>
        		<select id="single" name="jenis_pembayaran_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						<option value="">Pilih Jenis Pembayaran</option>
						@foreach($jenisPembayaran as $jenisPembayaran)
								<option value="{{$jenisPembayaran->id}}">{{$jenisPembayaran->nama}}</option>
						@endforeach
        		</select>
      			</div>

						<div class="form-group">
        		<label for="single">Kelas</label>
        		<select id="single" name="kelas_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						<option value="">Pilih Kelas</option>
						@foreach($kelas as $kelas)
								<option value="{{$kelas->id}}">{{$kelas->nama}}</option>
						@endforeach
        		</select>
      			</div>

            <div class="form-group">
              <label>Nominal Pembayaran</label>
              <input name="nominal" type="text" class="form-control" placeholder="Nominal Pembayaran" required>                        
            </div>
                       
          </div>
          <div class="card-action text-right">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
					</form>
                  <a href="/nominal-spp" class="btn btn-danger">Batal</a>
								</div>
          
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
