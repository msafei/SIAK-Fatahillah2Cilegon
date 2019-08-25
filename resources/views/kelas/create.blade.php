@extends('layouts.siak')
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/kelas"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Tambah Kelas</h4>
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
								<a href="/kelas">Data Kelas</a>
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
                                    
                    <form method="post" action="{{route('kelas.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>ID Kelas</label>
              <input name="id" type="text" class="form-control" placeholder="ID Kelas" required>                        
            </div>

						<div class="form-group">
        		<label for="single">Jurusan</label>
        		<select id="single" name="jurusan_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						@foreach($jurusan as $jurusan)
								<option value="{{$jurusan->id}}">{{$jurusan->kode}} - {{$jurusan->nama}}</option>
						@endforeach
        		</select>
      			</div>

            <div class="form-group">
              <label>Kelas</label>
              <input name="nama" type="text" class="form-control" placeholder="Kelas" required>                        
            </div>
                       
          </div>
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
                  <a href="/kelas"><button class="btn btn-danger"><a>Batal</a></button></a>
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
