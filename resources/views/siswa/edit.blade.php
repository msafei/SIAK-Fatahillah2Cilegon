@extends('layouts.dashboard')
@section('show-master')
show
@endsection
@section('active-siswa')
active
@endsection
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/siswa"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Edit siswa</h4>
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
								<a href="/siswa">Data siswa</a>
              </li>
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
              <li class="nav-item">
								<a >Edit siswa</a>
							</li>
							</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('siswa.update',$siswa->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>NIS</label>
              <input name="id" value="{{$siswa->id}}" type="text" class="form-control" placeholder="Nomor Induk Siswa" disabled>                        
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input name="nama" value="{{$siswa->nama}}" type="text" class="form-control" placeholder="Nama" required>                        
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
              <input name="tanggalLahir" value="{{$siswa->tanggalLahir}}" type="date" class="form-control" placeholder="Tanggal Lahir">                        
            </div>
      
      <div class="form-group">
        		<label for="single">Kelas</label>
        		<select id="single" name="kelas_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						<option value="">Pilih Kelas</option>
						@foreach($kelas as $kelas)
								<option value="{{$kelas->id}}" 
                @if ($kelas->id == $siswa->kelas_id)
								selected
								@endif
                >{{$kelas->nama}}</option>
						@endforeach
        		</select>
      			</div>

            <div class="form-group">
              <label>Alamat Siswa</label>
              <textarea name="alamatSiswa" type="text" class="form-control" placeholder="Alamat Siswa" rows="3" data-minwords="3">{{$siswa->alamatSiswa}}</textarea>                        
            </div>

            <div class="form-group">
                <label>Nama Ayah</label>
                <input name="namaAyah" value="{{$siswa->namaAyah}}" class="form-control" placeholder="Nama Ayah">
              </div>

              <div class="form-group">
                <label>Nama Ibu</label>
                <input name="namaIbu" value="{{$siswa->namaIbu}}" class="form-control" placeholder="Nama Ibu">
              </div>

            
            <div class="form-group">
              <label>Alamat Ortu</label>
              <textarea name="alamatOrtu" type="text" class="form-control" placeholder="Alamat Ortu" rows="3" data-minwords="3">{{$siswa->alamatOrtu}}</textarea>                        
            </div>

            <div class="form-group">
              <label>No Tlp Ortu</label>
              <input name="noTlpOrtu" value="{{$siswa->noTlpOrtu}}" type="text" class="form-control" placeholder="No Telp Ortu">                        
            </div>

          </div>
          <div class="card-action text-right">
          <button type="submit" class="btn btn-success"><a>Ubah</a></button>
            </form>
            <a href="/admin"><button class="btn btn-danger">Batal</button></a>               
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