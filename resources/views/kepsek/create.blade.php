@extends('layouts.dashboard')
@section('show-master')
show
@endsection
@section('active-admin')
active
@endsection
@section('title')

              <div class="nav-link">
              
           

              
              <!-- / -->
            </div>
@endsection
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/admin"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Tambah Admin</h4>
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
								<a href="/admin">Data Admin</a>
              </li>
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
              <li class="nav-item">
								<a >Tambah Admin</a>
							</li>
							</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
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
        <label for="single">Jenis Kelamin</label>
        <select id="single" name="jk" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
            <option value="P">Perempuan</option>
            <option value="L">Laki-Laki</option>
        </select>
      </div>
      
      

            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input name="tanggalLahir" type="text" class="form-control" placeholder="Tanggal Lahir">                        
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="6" data-minwords="6" required placeholder="Alamat"></textarea>
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
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Ubah</a></button>
                  <a href="/admin"><button class="btn btn-danger"><a>Batal</a></button></a>
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
